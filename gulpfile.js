const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

    mix.styles([

        'vendor.min.css',
        'elephant.min.css',
        'application.min.css',
        'demo.min.css'

    ], 'public/css/libs.css');

    mix.scripts([

        'vendor.min.js',
        'elephant.min.js',
        'application.min.js',
        'demo.min.js'

    ], 'public/js/libs.js');


});
