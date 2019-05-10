const mix = require('laravel-mix');


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
   .extract([
         'vue',
         'jquery',
         'swiper',
         'moment',
         'bootstrap-datetimepicker-npm',
         'nouislider',
     ])
   .js('resources/js/admin-app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/admin-app.scss', 'public/css')
   .copyDirectory('node_modules/overlayscrollbars', 'public/node_modules/overlayscrollbars')
   .copyDirectory('node_modules/mediaelement', 'public/node_modules/mediaelement')
   .copyDirectory('node_modules/sticky-kit', 'public/node_modules/sticky-kit')
   .copyDirectory('node_modules/lightgallery', 'public/node_modules/lightgallery');
   // .autoload({
   //      'jquery': ['$', 'window.$', 'jQuery', 'window.jQuery'], //extract into the global variable space
   //      'popper.js': ['Popper', 'window.Popper']
   //  });

if (mix.inProduction()) {
    mix.version();
}