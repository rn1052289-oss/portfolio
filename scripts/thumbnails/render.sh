#!/usr/bin/env bash
# Render the works thumbnails from template.html with headless Chrome,
# then convert them to WebP for the site.
#   scripts/thumbnails/render.sh            # all 10 for works.html, normal + wide
#   scripts/thumbnails/render.sh 01         # one work only
#   scripts/thumbnails/render.sh home       # home page cards (work-XX-home.webp)
set -euo pipefail

DIR="$(cd "$(dirname "$0")" && pwd)"
OUT="$DIR/../../portfolio/images/works-thumbs"
TMP="$(mktemp -d)"
CHROME="/Applications/Google Chrome.app/Contents/MacOS/Google Chrome"
mkdir -p "$OUT"

# The home page shows a different subset and order than works.html, so its
# stamps are numbered separately. Keep this list in the order of index.html.
HOME_ORDER=(08 07 09 10 05 06 04 02)

shot() { # query width height name
	"$CHROME" --headless=new --disable-gpu --hide-scrollbars --allow-file-access-from-files \
		--virtual-time-budget=3000 --window-size="$2,$3" \
		--screenshot="$TMP/$4.png" "file://$DIR/template.html?$1" 2>/dev/null
	cwebp -quiet -q 84 "$TMP/$4.png" -o "$OUT/$4.webp"
}

if [[ "${1:-}" == "home" ]]; then
	n=1
	for id in "${HOME_ORDER[@]}"; do
		num=$(printf '%02d' "$n")
		shot "id=$id&wide=0&num=$num" 1600 1000 "work-$id-home"
		echo "rendered home $id as $num"
		n=$((n + 1))
	done
else
	IDS=("${@:-01 02 03 04 05 06 07 08 09 10}")
	for id in ${IDS[@]}; do
		shot "id=$id&wide=0" 1600 1000 "work-$id"
		shot "id=$id&wide=1" 2100 900 "work-$id-wide"
		echo "rendered $id"
	done
fi
rm -rf "$TMP"
