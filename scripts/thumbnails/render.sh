#!/usr/bin/env bash
# Render the works thumbnails from template.html with headless Chrome,
# then convert them to WebP for the site.
#   scripts/thumbnails/render.sh            # all 10, normal + wide
#   scripts/thumbnails/render.sh 01         # one work only
set -euo pipefail

DIR="$(cd "$(dirname "$0")" && pwd)"
OUT="$DIR/../../portfolio/images/works-thumbs"
TMP="$(mktemp -d)"
CHROME="/Applications/Google Chrome.app/Contents/MacOS/Google Chrome"
IDS=("${@:-01 02 03 04 05 06 07 08 09 10}")
mkdir -p "$OUT"

shot() { # id wide width height name
	"$CHROME" --headless=new --disable-gpu --hide-scrollbars --allow-file-access-from-files \
		--virtual-time-budget=3000 --window-size="$3,$4" \
		--screenshot="$TMP/$5.png" "file://$DIR/template.html?id=$1&wide=$2" 2>/dev/null
	cwebp -quiet -q 84 "$TMP/$5.png" -o "$OUT/$5.webp"
}

for id in ${IDS[@]}; do
	shot "$id" 0 1600 1000 "work-$id"
	shot "$id" 1 2100 900 "work-$id-wide"
	echo "rendered $id"
done
rm -rf "$TMP"
