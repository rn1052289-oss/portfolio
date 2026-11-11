#!/usr/bin/env bash

set -euo pipefail

workspace_dir="$(cd "$(dirname "$0")/.." && pwd)"
site_dir="$workspace_dir/portfolio"
archive_arg="${1:-$workspace_dir/portfolio-deploy-20260802.zip}"

if [[ "$archive_arg" = /* ]]; then
	archive_path="$archive_arg"
else
	archive_path="$workspace_dir/$archive_arg"
fi

temp_dir="$(mktemp -d)"
staging_dir="$temp_dir/site"

cleanup() {
	rm -rf "$temp_dir"
}
trap cleanup EXIT

mkdir -p "$staging_dir"
cp -R "$site_dir/." "$staging_dir/"

if [[ ! -f "$staging_dir/.htaccess" || ! -f "$staging_dir/contact-submit.php" ]]; then
	echo "Required deployment files are missing." >&2
	exit 1
fi

cd "$staging_dir"
zip -q -r "$temp_dir/portfolio.zip" . \
	-x '*/.DS_Store' '.DS_Store' '__MACOSX/*' '*/Thumbs.db' '*.bak' '*.backup' '*.orig' '*.log'
unzip -q -t "$temp_dir/portfolio.zip"

if ! zipinfo -1 "$temp_dir/portfolio.zip" | grep -qx '.htaccess'; then
	echo ".htaccess was not included in the deployment archive." >&2
	exit 1
fi

if zipinfo -1 "$temp_dir/portfolio.zip" | grep -Eq '(^|/)\.DS_Store$|__MACOSX'; then
	echo "OS metadata was found in the deployment archive." >&2
	exit 1
fi

mv "$temp_dir/portfolio.zip" "$archive_path"
echo "Built $archive_path"
