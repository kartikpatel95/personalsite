const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');
const browsersync = require('browser-sync').create();
const rename = require('gulp-rename');
const cached = require('gulp-cached');
const dependents = require('gulp-dependents');
const notify = require("gulp-notify");

//configurations
const config = {
    browsersync: {
        files: [
            './templates/**/*.ss',
            './assets/css/**/*.css',
            '/app/assets/css/**/*.css',
            './assets/javascript/**/*.js'
        ],
        devURL: 'personalsite.vcap.me',
    },
    css: {
        src: './assets/css/**/*.scss',
        dest: './assets/css'
    }
};

//compile scss and minify
// const scssTaskCompile = () => gulp.src([config.css.src, '!**/*.min.css'])
//     .pipe(sourcemaps.init())
//     .pipe(cached('scss'))
//     .pipe(dependents())
//     .pipe(rename({suffix: '.min'}))
//     .pipe(sass())
//     .pipe(postcss([autoprefixer(), cssnano()]))
//     .pipe(sourcemaps.write('.'))
//     .pipe(gulp.dest(config.css.dest))
//     .pipe(browsersync.stream());

const scssTaskCompile = () => gulp.src(config.css.src)
    .pipe(sourcemaps.init())
    .pipe(cached('scss'))
    .pipe(dependents())
    .pipe(sass())
    .on('error', sass.logError)
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(config.css.dest))
    .pipe(browsersync.stream());
scssTaskCompile.displayName = "SCSS Task compiling";

const scssTaskMinify = () => gulp.src([`${config.css.dest}/*.css`, '!**/*.min.css'])
    .pipe(sourcemaps.init())
    .pipe(rename({suffix: '.min'}))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write('.', {includeContent: false, sourceRoot: 'scss'}))
    .pipe(gulp.dest(config.css.dest));
scssTaskMinify.displayName = 'SCSS Minify';

const buildCSS = gulp.series(scssTaskCompile, scssTaskMinify);

//watch files
const watchFiles = () => {
    gulp.watch(config.css.src, {ignoreInitial: false}, scssTaskCompile);
    gulp.watch([`${config.css.dest}/*.css`, '!**/*.min.css'], {ignoreInitial: false}, scssTaskMinify)
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

exports.scssTaskCompile = scssTaskCompile;
exports.scssTaskMinify = scssTaskMinify;
exports.buildCSS = buildCSS;
exports.watch = watch;
exports.default = watch;
