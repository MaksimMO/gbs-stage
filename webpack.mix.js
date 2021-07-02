const mix = require('laravel-mix');

mix.webpackConfig({
    mode: 'development',
    devtool:'source-map'
});



mix.js('resources/js/Index.js', 'public/js/Index.js')
    .vue({
        extractStyles:'public/css/gbs-vue.css'
    })
    .sass('resources/sass/app.scss', 'public/css').version()

