const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .copy('resources/css/', 'public/css')
    .copy('resources/js/', 'public/js')
    .copy('resources/fonts/', 'public/fonts')
    .copy('resources/images/', 'public/images')
    .postCss('resources/css/app.css', 'public/css', [
    ]);
