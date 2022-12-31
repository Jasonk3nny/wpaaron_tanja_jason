#!/bin/sh
cp ./src/php/*.* ./public/wp-content/themes/aaron/
cp -R ./src/images ./public/wp-content/themes/aaron
cp -R ./src/fonts ./public/wp-content/themes/aaron
cp -R ./src/favicons ./public/wp-content/themes/aaron
npx sass ./src/sass/style.scss ./public/wp-content/themes/aaron/style.css.map
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/aaron/main.js  --minify

