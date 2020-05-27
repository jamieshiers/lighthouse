const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.styles('resources/sass/styles.css', 'public/assets/css/output.css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('tailwind.config.js')],
    });

