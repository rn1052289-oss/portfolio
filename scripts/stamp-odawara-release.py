#!/usr/bin/env python3
"""Apply an idempotent release stamp and resilient base markup to the demo."""

from __future__ import annotations

import re
from pathlib import Path


ROOT = Path(__file__).resolve().parents[1]
SITE_ROOT = ROOT / "portfolio" / "odawara-lacquerware-fixed"
RELEASE = "20260727-1"
NOTICE = (
    '<aside id="demo-notice" class="demo-notice" tabindex="-1" '
    'aria-label="デモサイトについて"><strong>自主制作のコンセプトサイトです。</strong> '
    '特定の店舗・団体・職人を表すものではありません。予約・購入・送信・SNS等の外部連携は動作しません。</aside>'
)
SKIP_LINK = '<a class="skip-link" href="#main-content">本文へ移動</a>'
JS_CLASS = "<script>document.documentElement.classList.add('js');</script>"


def stamp_url(value: str) -> str:
    base = value.split("?", 1)[0]
    return f"{base}?v={RELEASE}"


def stamp_html(path: Path) -> None:
    text = path.read_text(encoding="utf-8")

    text = re.sub(
        r'href="(css/[^"?]+\.css)(?:\?[^" ]*)?"',
        lambda match: f'href="{stamp_url(match.group(1))}"',
        text,
    )
    text = re.sub(
        r'src="(js/script\.js)(?:\?[^" ]*)?"',
        lambda match: f'src="{stamp_url(match.group(1))}"',
        text,
    )
    text = re.sub(
        r'(src|data-full)="(images/[^"?]+\.(?:webp|png))(?:\?[^" ]*)?"',
        lambda match: f'{match.group(1)}="{stamp_url(match.group(2))}"',
        text,
    )
    text = re.sub(
        r'(https://rnportfolio\.xsrv\.jp/odawara-lacquerware-fixed/images/[^"?]+\.(?:webp|png))(?:\?[^" ]*)?',
        lambda match: stamp_url(match.group(1)),
        text,
    )
    text = text.replace(
        "family=Noto+Serif+JP:wght@300;400;600",
        "family=Noto+Serif+JP:wght@300;400",
    )

    if JS_CLASS not in text:
        text = text.replace("</title>", f"</title>\n  {JS_CLASS}", 1)

    if 'id="demo-notice"' not in text:
        text = text.replace("<body>", f"<body>\n  {NOTICE}\n  {SKIP_LINK}", 1)
    elif SKIP_LINK not in text:
        text = text.replace("</aside>", f"</aside>\n  {SKIP_LINK}", 1)

    text = re.sub(r"<main(?![^>]*\bid=)", '<main id="main-content"', text, count=1)
    text = re.sub(
        r'<div class="mobile-menu"(?![^>]*\baria-hidden=)',
        '<div class="mobile-menu" aria-hidden="true" inert',
        text,
        count=1,
    )

    path.write_text(text, encoding="utf-8")
    print(f"stamped {path.name}")


if __name__ == "__main__":
    for html_path in sorted(SITE_ROOT.glob("*.html")):
        stamp_html(html_path)
