var gulp = require('gulp');
var watch = require('gulp-watch');

gulp.task('watch', function() {
    return watch('**/*', ['build']);
});

gulp.task('build', function() {
    gulp.src(['**/*', '!.git/*'])
        .pipe(gulp.dest('../kam-wp/wp-content/plugins/forum-security'));
});