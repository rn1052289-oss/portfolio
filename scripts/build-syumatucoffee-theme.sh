#!/usr/bin/env bash

set -euo pipefail

workspace_dir="$(cd "$(dirname "$0")/.." && pwd)"
theme_dir="$workspace_dir/syumatucoffee"
archive_arg="${1:-$workspace_dir/syumatucoffee.zip}"

if [[ "$archive_arg" = /* ]]; then
	archive_path="$archive_arg"
else
	archive_path="$workspace_dir/$archive_arg"
fi

temp_dir="$(mktemp -d)"
staging_dir="$temp_dir/syumatucoffee"

cleanup() {
	rm -rf "$temp_dir"
}
trap cleanup EXIT

if [[ ! -f "$theme_dir/style.css" || ! -f "$theme_dir/functions.php" ]]; then
	echo "Theme files were not found in $theme_dir" >&2
	exit 1
fi

if [[ ! -d "$(dirname "$archive_path")" ]]; then
	echo "Output directory does not exist: $(dirname "$archive_path")" >&2
	exit 1
fi

mkdir -p "$staging_dir"

# WordPressが直接読み込むテーマルートのPHPとテーマ情報を収集する。
find "$theme_dir" -maxdepth 1 -type f -name '*.php' -exec cp '{}' "$staging_dir/" \;
cp "$theme_dir/style.css" "$theme_dir/README.md" "$staging_dir/"

# 実行時に必要なアセットだけを許可リストで収集する。
for asset_dir in css js images video; do
	if [[ ! -d "$theme_dir/$asset_dir" ]]; then
		echo "Required asset directory is missing: $theme_dir/$asset_dir" >&2
		exit 1
	fi
	cp -R "$theme_dir/$asset_dir" "$staging_dir/$asset_dir"
done

required_entries=(
	"style.css"
	"functions.php"
	"front-page.php"
	"page-about.php"
	"page-beans.php"
	"page-guide.php"
	"page-plan.php"
	"page-news.php"
	"page-contact.php"
	"page-shop.php"
	"css/common.css"
	"js/common.js"
	"images/logo.png"
)

for required_entry in "${required_entries[@]}"; do
	if [[ ! -e "$staging_dir/$required_entry" ]]; then
		echo "Required theme entry is missing: $required_entry" >&2
		exit 1
	fi
done

cd "$temp_dir"
zip -q -r "$temp_dir/syumatucoffee.zip" syumatucoffee \
	-x '*/.DS_Store' '__MACOSX/*' '*/Thumbs.db'
unzip -q -t "$temp_dir/syumatucoffee.zip"

if zipinfo -1 "$temp_dir/syumatucoffee.zip" | grep -Eq '\.html$|^syumatucoffee/(about|beans|contact|guide|news|online-shop|plan)/'; then
	echo "Legacy static HTML content was found in the theme archive." >&2
	exit 1
fi

mv "$temp_dir/syumatucoffee.zip" "$archive_path"

echo "Built $archive_path"
