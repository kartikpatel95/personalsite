const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

browserSync = () => {
    return {
        watch: true,
        watchOptions: {
            ignored: './node_modules/'
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
            })
        ]
    }
};

module.exports = browserSync;
