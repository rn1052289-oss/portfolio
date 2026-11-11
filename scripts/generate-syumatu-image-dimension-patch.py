#!/usr/bin/env python3
"""Print an apply_patch payload adding intrinsic dimensions to theme images."""

from __future__ import annotations

import difflib
import re
import subprocess
from pathlib import Path


ROOT = Path(__file__).resolve().parents[1]
THEME = ROOT / "syumatucoffee"
IMAGES = THEME / "images"


def image_size(path: Path) -> tuple[int, int]:
    if path.suffix.lower() == ".svg":
        source = path.read_text(encoding="utf-8", errors="ignore")
        match = re.search(r'viewBox=["\'][^"\']*?([\d.]+)\s+([\d.]+)["\']', source)
        if not match:
            raise RuntimeError(f"SVG viewBox not found: {path}")
        return round(float(match.group(1))), round(float(match.group(2)))

    result = subprocess.run(
        ["sips", "-g", "pixelWidth", "-g", "pixelHeight", str(path)],
        check=True,
        capture_output=True,
        text=True,
    )
    width = re.search(r"pixelWidth:\s*(\d+)", result.stdout)
    height = re.search(r"pixelHeight:\s*(\d+)", result.stdout)
    if not width or not height:
        raise RuntimeError(f"Raster dimensions not found: {path}")
    return int(width.group(1)), int(height.group(1))


def update_source(source: str) -> str:
    # Ignore PHP closing-token '>' characters while locating each HTML img tag.
    protected = source.replace("?>", "§§")
    replacements: list[tuple[int, int, str]] = []

    for match in re.finditer(r"<img\b[^>]*>", protected, flags=re.IGNORECASE | re.DOTALL):
        tag = source[match.start() : match.end()]
        if re.search(r"\bwidth\s*=", tag, re.IGNORECASE) and re.search(
            r"\bheight\s*=", tag, re.IGNORECASE
        ):
            continue

        filename = re.search(r"/images/([A-Za-z0-9_.-]+)", tag)
        if not filename:
            continue

        image_path = IMAGES / filename.group(1)
        if not image_path.is_file():
            raise RuntimeError(f"Referenced image not found: {image_path}")

        width, height = image_size(image_path)
        updated = tag[:-1].rstrip() + f' width="{width}" height="{height}">'
        replacements.append((match.start(), match.end(), updated))

    for start, end, updated in reversed(replacements):
        source = source[:start] + updated + source[end:]
    return source


def main() -> None:
    sections: list[str] = ["*** Begin Patch\n"]
    changed = 0

    for path in sorted(THEME.glob("*.php")):
        original = path.read_text(encoding="utf-8")
        updated = update_source(original)
        if updated == original:
            continue

        changed += 1
        diff = list(
            difflib.unified_diff(
                original.splitlines(keepends=True),
                updated.splitlines(keepends=True),
                fromfile=str(path),
                tofile=str(path),
                n=2,
            )
        )
        sections.append(f"*** Update File: {path}\n")
        for line in diff[2:]:
            sections.append("@@\n" if line.startswith("@@ ") else line)

    sections.append("*** End Patch\n")
    if not changed:
        raise SystemExit("No missing image dimensions were found.")
    print("".join(sections), end="")


if __name__ == "__main__":
    main()
