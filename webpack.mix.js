const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css') // Jika kamu menggunakan SASS
   .postCss('resources/css/styles.css', 'public/css', [
       require('tailwindcss'),
   ]);
