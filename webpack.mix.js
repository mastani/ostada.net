const {mix} = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/persianumber.js',
    'resources/assets/js/typeahead.bundle.min.js',
    'resources/assets/js/handlebars.min.js',
    'resources/assets/js/jquery.barrating.min.js'
], 'public/js/vendor.js')
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .combine([
        'bower_resources/bootstrap-rtl/dist/css/bootstrap-rtl.min.css',
        'bower_resources/font-awesome/css/font-awesome.min.css',
        'resources/assets/css/typeahead.css',
        'resources/assets/css/main.css',
    ], 'public/css/vendor.css');