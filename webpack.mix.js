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
mix.styles([
		'resources/bootstrap/css/bootstrap.css',
		'resources/css/home.css',
		'resources/css/about_us.css',
		'resources/css/menu.css',
		'resources/css/gallery.css',
		'resources/css/reservation.css',
		'resources/css/location.css',
		'resources/css/blog.css',

		],'public/css/master.css');

mix.scripts([
		'resources/js/jquery.js',
		'resources/js/custom/home.js',
		'resources/js/custom/about_us.js',
		'resources/js/custom/menu.js',
		'resources/js/custom/gallery.js',
		'resources/js/custom/reservation.js',
		'resources/js/custom/location.js',
		'resources/js/custom/blog.js',
		'resources/js/custom/myajax.js',

		],'public/js/master.js');