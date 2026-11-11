#!/usr/bin/env bash

set -euo pipefail

workspace_dir="$(cd "$(dirname "$0")/.." && pwd)"
theme_dir="$workspace_dir/yuakari-theme-src/yuakari"
archive_arg="${1:-$workspace_dir/yuakari-theme-20260802.zip}"

if [[ "$archive_arg" = /* ]]; then
	archive_path="$archive_arg"
else
	archive_path="$workspace_dir/$archive_arg"
fi

temp_dir="$(mktemp -d)"
staging_dir="$temp_dir/yuakari"

cleanup() {
	rm -rf "$temp_dir"
}
trap cleanup EXIT

if [[ ! -f "$theme_dir/style.css" || ! -f "$theme_dir/functions.php" ]]; then
	echo "Theme files were not found in $theme_dir" >&2
	exit 1
fi

mkdir -p "$staging_dir"

find "$theme_dir" -maxdepth 1 -type f -name '*.php' -exec cp '{}' "$staging_dir/" \;
cp "$theme_dir/style.css" "$staging_dir/"

for asset_dir in css js img svg; do
	if [[ ! -d "$theme_dir/$asset_dir" ]]; then
		echo "Required asset directory is missing: $theme_dir/$asset_dir" >&2
		exit 1
	fi
	cp -R "$theme_dir/$asset_dir" "$staging_dir/$asset_dir"
done

required_entries=(
	"style.css"
	"functions.php"
	"header.php"
	"footer.php"
	"front-page.php"
	"index.php"
	"page-contact.php"
	"page-tour-detail.php"
	"css/common.css"
	"js/script.js"
	"svg/logo.svg"
)

for required_entry in "${required_entries[@]}"; do
	if [[ ! -e "$staging_dir/$required_entry" ]]; then
		echo "Required theme entry is missing: $required_entry" >&2
		exit 1
	fi
done

cd "$temp_dir"
zip -q -r "$temp_dir/yuakari.zip" yuakari \
	-x '*/.DS_Store' '__MACOSX/*' '*/Thumbs.db' '*.pdf' '*.doc' '*.docx' '*.ppt' '*.pptx' '*.xls' '*.xlsx'
unzip -q -t "$temp_dir/yuakari.zip"

if zipinfo -1 "$temp_dir/yuakari.zip" | grep -Eq '\.(pdf|docx?|pptx?|xlsx?)$|/卒業課題/|__MACOSX|\.DS_Store'; then
	echo "A private document or metadata file was found in the theme archive." >&2
	exit 1
fi

mv "$temp_dir/yuakari.zip" "$archive_path"
echo "Built $archive_path"
