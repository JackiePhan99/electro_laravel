// noinspection JSCheckFunctionSignatures

const mix = require('laravel-mix');
mix.js("resources/js/app.js", "public/js")
    .sass([
            'resources/sass/custom.scss',
            'resources/css/carousel.css'
        ], "public/css");
