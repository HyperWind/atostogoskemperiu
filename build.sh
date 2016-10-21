#!/bin/zsh

minify app/assets/scripts/camper/*.js > public/scripts/camper/camper.js
minify app/assets/stylesheets/index/*.css > public/stylesheets/index/index.css
minify app/assets/stylesheets/camper/*.css > public/stylesheets/camper/camper.css
