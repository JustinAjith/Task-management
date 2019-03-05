const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/css/style.css',
    'public/css/asset.css'
], 'public/css/app.css');
