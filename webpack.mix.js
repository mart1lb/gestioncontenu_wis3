const mix = require('laravel-mix');
require('laravel-mix-purgecss');
let path = require('path');

mix
    // Frontend
    .sass('src/scss/app.scss', 'css')
    .js('src/js/app.js', 'js')

    // Backend
    .sass('src/scss/style-editor.scss', 'css')
    .js('src/js/script-editor.js', 'js')

    // Custom blocks
    .setPublicPath('assets');

    //.purgeCss({
    //    content: [path.join(__dirname, '**/*.php'), path.join(__dirname, 'src/**/*.js')],
    //    safelist: {deep: [/has-/, /is-/, /align/, /block-/, /modal/, /wp-block-separator/, /error/, /modal-backdrop/, /required/]},
    //});
