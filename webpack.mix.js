const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/styles.css', 'public/css/app.css', [
      require('postcss-import'),
      require('tailwindcss'),
  ]);

