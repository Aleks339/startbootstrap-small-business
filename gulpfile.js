var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var pkg = require('./package.json');
var less = require('gulp-less');

// Configure the browserSync task
gulp.task('browserSync', function() {
    browserSync.init({
        proxy: "mulana.loc/index.php",
        notify: false
    });
})

// Dev task with browserSync
gulp.task('dev', ['browserSync',"less"], function() {
    // Reloads the browser whenever HTML or CSS files change
    gulp.watch('less/**/*.less', ["less"]);
    gulp.watch('css/*.css', browserSync.reload);
    gulp.watch('*.html', browserSync.reload);
});

gulp.task('less', function() {
    return gulp.src('less/**/*.less')
        .pipe(less())
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});
