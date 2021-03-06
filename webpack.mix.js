// webpack.mix.js


let mix = require('laravel-mix');

mix.sourceMaps()
    .js('src/js/app.js', 'js')
    .sass('src/scss/main.scss', 'css')
    .options({
        processCssUrls: false
    })
    .setPublicPath('assets');
    

    if ( ! mix.inProduction()) {
        mix.webpackConfig({
            devtool: 'inline-source-map'
        })
    }