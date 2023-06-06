let mix = require('laravel-mix');

mix.js('resources/js/main.js', 'dist/js');
mix.sass('resources/sass/stylesheet.sass', 'dist/css').options({
    processCssUrls: false
});