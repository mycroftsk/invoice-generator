var gulp = require('gulp');
var order = require('gulp-order');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var uglify = require('gulp-uglify');

gulp.task('css', function() {
    gulp.src('css/*.css')
        .pipe(order([
            'css/boostrap.css',
            'css/bootstrap-theme.css',
            'css/custom.css'
        ]))
        .pipe(minifyCSS())
        .pipe(concat('styles.min.css'))
        .pipe(gulp.dest('dist/css'))
});

gulp.task('js', function() {
   gulp.src('js/*.js')
       .pipe(order([
           'js/jquery-3.2.0.js',
           'js/bootstrap.js',
           'js/custom.js'
       ], { base: './' }))
       .pipe(uglify())
       .pipe(concat('scripts.min.js'))
       .pipe(gulp.dest('dist/js'))
});

