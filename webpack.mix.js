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
    .js('resources/js/application.js', 'public/js')
    .js('resources/js/bootstrap.min.js', 'public/js')
    .styles([
        'resources/css/bootstrap.min.css',
        'resources/css/londinium-theme.css',
        'resources/css/styles.css',
    ], 'public/css/app.css');
