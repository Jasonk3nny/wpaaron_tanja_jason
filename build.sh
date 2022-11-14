#!/bin/sh

# npx sass ./src/sass/style.scss ./public/wp-content/aaron/style.css
# cp ./src/index.html ./public/
# cp ./src/favicons/*.* ./public/
# cp -R ./src/images ./public/
# cp -R ./src/fonts ./public/fonts
# npx esbuild ./src/js/main.js --bundle --outfile=./public/main.js  --minify

cp ./src/index.php ./public/wp-content/themes/aaron/index.php
cp -R ./src/images ./public/wp-content/themes/aaron
cp -R ./src/fonts ./public/wp-content/themes/aaron
cp -R ./src/favicons ./public/wp-content/themes/aaron
npx sass ./src/sass/style.scss ./public/wp-content/themes/aaron/style.css
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/aaron/main.js  --minify

