const mix = require('laravel-mix');
let theme_path = process.env.THEME_PATH;

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

mix.js('resources/js/app.js', 'public/js')
    .js(theme_path + 'js/sb-admin-2.js', 'public/js')
    .js(theme_path + 'vendor/jquery/jquery.js', 'public/js')
    .js(theme_path + 'vendor/bootstrap/js/bootstrap.js', 'public/js')
    .js(theme_path + 'vendor/jquery-easing/jquery.easing.js', 'public/js')
    .js(theme_path + 'vendor/chart.js/Chart.bundle.js', 'public/js')
    .copy(theme_path + 'vendor/datatables/jquery.dataTables.min.js', 'public/js')
    .copy(theme_path + 'vendor/datatables/dataTables.bootstrap4.min.js', 'public/js')
    .copy(theme_path + 'js/demo', 'public/js/demo')
    .sass('resources/sass/app.scss', 'public/css')
    .sass(theme_path + 'scss/sb-admin-2.scss', 'public/css')
    .sass(theme_path + 'vendor/fontawesome-free/scss/fontawesome.scss', 'public/css')
    .copy(theme_path + 'vendor/fontawesome-free/webfonts', 'public/webfonts')
    .copy(theme_path + 'vendor/datatables/dataTables.bootstrap4.min.css', 'public/css')
    .copy(theme_path + 'img', 'public/img');
