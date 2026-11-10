#!/bin/sh
# Regenerates the theme's self-hosted font stylesheet and copies the woff2 files.
# Run inside the app container from the repo root:
#   docker compose exec -T web sh wordpress/build/generate-fonts.sh
set -eu

SRC="node_modules/@fontsource/vazirmatn"
DST="wordpress/ajil-khor/assets"
FONTS="$DST/fonts"
OUT="$DST/css/fonts.css"

mkdir -p "$FONTS"

for weight in 400 500 700 800; do
	cp "$SRC/files/vazirmatn-arabic-$weight-normal.woff2" "$FONTS/"
	cp "$SRC/files/vazirmatn-latin-$weight-normal.woff2" "$FONTS/"
done

: >"$OUT"

for weight in 400 500 700 800; do
	awk -v weight="$weight" '
		/^\/\* vazirmatn-/ { block = $0; keep = 0; next }
		{
			if (block != "") { block = block "\n" $0 }
			if ($0 ~ ("vazirmatn-(arabic|latin)-" weight "-normal")) { keep = 1 }
			if ($0 == "}") { if (keep) { print block; print "" } block = ""; keep = 0 }
		}
	' "$SRC/$weight.css" >>"$OUT"
done

# Point at the bundled woff2 files and drop the .woff fallback.
sed -i "s#url(\./files/#url(../fonts/#g" "$OUT"
sed -i -E "s#, url\([^)]*\.woff\) format\('woff'\)##g" "$OUT"

echo "fonts.css written to $OUT"
