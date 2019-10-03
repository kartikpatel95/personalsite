const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

startup = () => {
    return {
        watchOptions: {
            ignored: './node_modules/'
        },
        module: {
            rules: [
                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        'css-loader',
                        'sass-loader'
                    ]
                },
                {
                    test: /\.(jpg|jpeg|png|svg)$/,
                    use: [{
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: 'img/',
                            publicPath: '/dist/img/'
                        }
                    }]
                },
            ],
        },
        plugins: [
            new BrowserSyncPlugin({
                open: 'external',
                files: [
                    './templates/**/*.ss',
                    './assets/css/**/*.css',
                    './assets/javascript/**/*.js'
                ],
                host: 'personal.mysite.vcap.me',
                port: 3000,
                proxy: 'http://personal.mysite.vcap.me'
            }),
            new MiniCssExtractPlugin({
                filename: "css/[name].css",
                chunkFilename: "[id].css"
            })
        ]
    }
};

module.exports = startup;
