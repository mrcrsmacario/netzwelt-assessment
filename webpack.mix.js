let mix = require('laravel-mix');

mix.options({
    hmrOptions: {
        host: 'localhost',
        port: '8000'
    },
});

mix.webpackConfig({
    devServer: {
        port: '8000'
    },
});
mix.js('resources/js/app.js', 'public/js')
    .vue({
        version: 3,
    })
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);