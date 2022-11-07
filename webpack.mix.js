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

mix.js('resources/js/index.js', 'public/js')
    .js('resources/js/appointment_booking.js', 'public/js')
    .js('resources/js/cart.js', 'public/js')
    .js('resources/js/checkout.js', 'public/js')
    .postCss('resources/css/index.css', 'public/css', [
        //
    ]).postCss('resources/css/home.css', 'public/css', [
        //
    ]).postCss('resources/css/contact_us.css', 'public/css', [
        //
    ]).postCss('resources/css/about_us/faq.css', 'public/css', [
        //
    ]);