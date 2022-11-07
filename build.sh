#!/bin/sh
npx sass ./src/sass/style.scss ./public/style.css
cp ./src/index.html ./public/
cp ./src/favicons/*.* ./public/
cp -R ./src/images ./public/
cp -R ./src/fonts ./public/fonts
npx esbuild ./src/js/main.js --bundle --outfile=./public/main.js  --minify

