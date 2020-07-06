const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

mix.sass('./scss/app.scss', 'assets/css/')
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })
