#!/usr/bin/env python3
"""Build rights-cleared Odawara lacquerware WebP assets from generated PNG masters."""

from __future__ import annotations

import hashlib
import json
import re
from datetime import date
from pathlib import Path

from PIL import Image, ImageOps


ROOT = Path(__file__).resolve().parents[1]
SOURCE_ROOT = ROOT / "artifacts" / "odawara-generated-src"
SITE_ROOT = ROOT / "portfolio" / "odawara-lacquerware-fixed"
OUTPUT_ROOT = SITE_ROOT / "images"


# Source subdirectory and final intrinsic dimensions. CSS handles the final
# responsive crop, while these masters provide enough resolution for DPR 2.
ASSETS: dict[str, tuple[str, tuple[int, int]]] = {
    "hero-top": ("lifestyle", (1800, 788)),
    "scene-morning": ("lifestyle", (1400, 875)),
    "scene-dining": ("lifestyle", (1400, 875)),
    "banner-odawara": ("lifestyle", (1800, 450)),
    "scene-evening": ("lifestyle", (1400, 875)),
    "scene-nature": ("lifestyle", (1400, 875)),
    "scene-care": ("lifestyle", (1400, 875)),
    "banner-first-lacquerware": ("lifestyle", (1800, 788)),
    "banner-gift": ("lifestyle", (1800, 788)),
    "collection-hero": ("lifestyle", (1800, 788)),
    "craft-workshop": ("craft", (1800, 788)),
    "craft-process": ("craft", (1200, 900)),
    "hero-detail": ("craft", (1200, 1200)),
    "hero-experience": ("craft", (1400, 875)),
    "hero-place": ("craft", (1800, 788)),
    "hero-visit": ("craft", (1800, 788)),
    "place-bowl": ("craft", (1400, 788)),
    "place-craftwork": ("craft", (1400, 875)),
    "place-handcraft": ("craft", (1400, 875)),
    "place-nature": ("craft", (1200, 900)),
    "product-bowl-01-front": ("products", (1100, 1100)),
    "product-bowl-02-top": ("products", (1100, 1100)),
    "product-bowl-03-detail": ("products", (1100, 1100)),
    "product-bowl-04-lifestyle": ("products", (1100, 1100)),
    "product-bowl-suriurushi": ("products", (1100, 1100)),
    "product-bowl-tamamenuri": ("products", (1100, 1100)),
    "product-chopsticks": ("products", (1100, 1100)),
    "product-jubako": ("products", (1100, 1100)),
    "product-plate-large": ("products", (1100, 1100)),
    "product-plate-vermilion": ("products", (1100, 1100)),
    "product-sake-cup": ("products", (1100, 1100)),
    "product-saucer-set": ("products", (1100, 1100)),
    "product-tray-round": ("products", (1100, 1100)),
}


def build_assets() -> list[dict[str, object]]:
    records: list[dict[str, object]] = []
    for name, (group, size) in ASSETS.items():
        source = SOURCE_ROOT / group / f"{name}.png"
        output = OUTPUT_ROOT / f"{name}.webp"
        if not source.exists():
            raise FileNotFoundError(source)

        with Image.open(source) as original:
            image = ImageOps.exif_transpose(original).convert("RGB")
            image = ImageOps.fit(
                image,
                size,
                method=Image.Resampling.LANCZOS,
                centering=(0.5, 0.5),
            )
            image.save(
                output,
                "WEBP",
                quality=85,
                method=6,
                exact=True,
                exif=b"",
                xmp=b"",
            )

        digest = hashlib.sha256(output.read_bytes()).hexdigest()
        records.append(
            {
                "file": f"images/{name}.webp",
                "width": size[0],
                "height": size[1],
                "sha256": digest,
                "generated_source": f"{group}/{name}.png",
                "generator": "OpenAI built-in imagegen",
                "legacy_asset_used_as_reference": False,
            }
        )
        print(f"built {name}.webp {size[0]}x{size[1]} {digest[:12]}")
    return records


def update_html_dimensions() -> None:
    dimensions = {name: size for name, (_, size) in ASSETS.items()}
    image_pattern = re.compile(r"<img\b[^>]*?src=\"images/([^\"]+)\.webp\"[^>]*?>")

    for html_path in sorted(SITE_ROOT.glob("*.html")):
        text = html_path.read_text(encoding="utf-8")

        def replace(match: re.Match[str]) -> str:
            tag = match.group(0)
            name = match.group(1)
            if name not in dimensions:
                return tag
            width, height = dimensions[name]
            if re.search(r"\bwidth=\"\d+\"", tag):
                tag = re.sub(r"\bwidth=\"\d+\"", f'width="{width}"', tag, count=1)
            else:
                tag = tag.replace("<img", f'<img width="{width}"', 1)
            if re.search(r"\bheight=\"\d+\"", tag):
                tag = re.sub(r"\bheight=\"\d+\"", f'height="{height}"', tag, count=1)
            else:
                tag = tag.replace("<img", f'<img height="{height}"', 1)
            return tag

        updated = image_pattern.sub(replace, text)
        if updated != text:
            html_path.write_text(updated, encoding="utf-8")
            print(f"updated dimensions in {html_path.name}")


def write_manifest(records: list[dict[str, object]]) -> None:
    manifest_path = SOURCE_ROOT / "assets-manifest.json"
    manifest = {
        "project": "Odawara Lacquerware Concept Study",
        "generated_on": date.today().isoformat(),
        "rights_note": (
            "All listed photographic assets were generated from text prompts or newly generated "
            "project masters. No legacy or web-sourced image was used as an image-generation reference."
        ),
        "assets": records,
    }
    manifest_path.write_text(
        json.dumps(manifest, ensure_ascii=False, indent=2) + "\n",
        encoding="utf-8",
    )
    print(f"wrote {manifest_path.relative_to(ROOT)}")


if __name__ == "__main__":
    records = build_assets()
    update_html_dimensions()
    write_manifest(records)
