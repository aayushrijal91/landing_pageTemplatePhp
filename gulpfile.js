const { src, dest, watch } = require("gulp");
const path = require('path');
const sass = require("gulp-sass")(require('sass'));
const browserSync = require("browser-sync").create();
const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');
const terser = require('gulp-terser');

function style() {
    return src("./scss/**/*.scss")
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(dest("./app/assets/css"))
        .pipe(browserSync.stream());
}

function imgSquash() {
    return src("./images/**/*")
        .pipe(imagemin())
        .pipe(dest("./app/assets/images"));
}

function scripts() {
    const scriptsList = [
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        // 'node_modules/slick-carousel/slick/slick.min.js',
        // './node_modules/aos/dist/aos.js',
        'scripts/main.js',
    ];

    return src(scriptsList)
        .pipe(concat('app.js'))
        .pipe(terser())
        .pipe(dest('./app/assets/js'));
}

function watchTask() {
    browserSync.init({
        proxy: encodeURI(`localhost/landing_pages/${path.resolve(__dirname, './').split(path.sep).pop()}/app`),
        injectChanges: true,
    });
    watch("./scss/**/*.scss", style);
    watch('./scripts/**/*.js', scripts);
    watch("./images/**/*", imgSquash);
    watch('./app/**/*.php').on('change', browserSync.reload);
    watch("./app/assets/js/**/*.js").on('change', browserSync.reload);
}

exports.watch = watchTask;

