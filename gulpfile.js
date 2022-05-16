const gulp = require("gulp"); const path = require('path');
const sass = require("gulp-sass");
const browserSync = require("browser-sync").create();
const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');


// Compile Scss into Css
function style() {
    // 1. Where is my scss file
    return gulp.src("./scss/**/*.scss")
        // 2. pass file through sass compiler
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        // 3. Where do I save the compiled CSS?
        .pipe(gulp.dest("./app/assets/css"))
        // 4. Stream changes to all browsers
        .pipe(browserSync.stream());
}

function imgSquash() {
    return gulp.src("./images/**/*")
        .pipe(imagemin())
        .pipe(gulp.dest("./app/assets/images"));
}

function scripts() {
    // All JS files to be combined
    const scriptsList = [
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        // './node_modules/slick-carousel/slick/slick.min.js',
        // './node_modules/aos/dist/aos.js',
        'scripts/main.js',

    ];
    // Minify the JS and place it in ./assets/js/app.js
    return gulp.src(scriptsList)
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./app/assets/js'));
}


function watch() {
    browserSync.init({
        proxy: encodeURI(`localhost/projects/landing_pages/${path.resolve(__dirname, './').split(path.sep).pop()}/app`),
        injectChanges: true,
    });
    gulp.watch("./scss/**/*.scss", style);
    gulp.watch('./scripts/**/*.js', scripts);
    // gulp.watch("./images/**/*", imgSquash);
    gulp.watch('./app/**/*.php').on('change', browserSync.reload);
    gulp.watch("./app/assets/js/**/*.js").on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;

