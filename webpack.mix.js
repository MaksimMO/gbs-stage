const mix = require('laravel-mix');
const path = require('path');

mix.webpackConfig({
    mode: 'development',
    devtool:'source-map',
    optimization: {
        providedExports: true,
        sideEffects: true,
        usedExports: true
    },
    module: {
        rules: [{
                test: /\.(MOV|mp4$)$/,
                use: [
                    {
                        loader: "file-loader",
                        options: {
                            name: "[name].[ext]?[contenthash]",
                            outputPath: "video"
                        }
                    }
                ]
            }]
    }
});


mix.js('resources/js/Index.js', 'public/js/Index.js')
    .vue({
        extractStyles:'public/css/gbs-vue.css'
    })
    .sass('resources/sass/app.scss', 'public/css').version();

