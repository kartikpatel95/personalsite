const path = require('path');
const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');
const browsersync = require('browser-sync').create();

const config = {
    browsersync: {
        files: [
            './templates/**/*.ss',
            './assets/css/**/*.css',
            './assets/javascript/**/*.js'
        ],
        devURL: 'mysite.vcap.me',
    },
    css: {
        src: './assets/css/**/*scss',
        dest: './assets/css'
    }
};

//compile scss
const scssTask = () => gulp.src(config.css.src)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(config.css.dest))
    .pipe(browsersync.stream());
scssTask.displayName = "scssTask";

//minify css


//minify js


//watch files
const watchFiles = () => {
    gulp.watch(config.css.src, {ignoreInitial: false}, scssTask)
};

//browser reload on changes
const browserSync = () => {
    const syncOptions = {
        port: 3000,
        proxy: config.browsersync.devURL,
        host: config.browsersync.devURL,
        files: config.browsersync.files,
        open: 'external',
        ignore: [
            './assets/css/**/*.map',
            './assets/css/**/*.min'
        ]
    };
    browsersync.init(syncOptions)
};

const watch = gulp.parallel(watchFiles, browserSync);

exports.watch = watch;