var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');

/* CSS related tasks */
gulp.task('less', function () {
  return gulp.src(['gulp/kc_bootstrap.less','gulp/pace.less'])
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('./public/css'));
});

/* JS related tasks */
gulp.task('script', function(){

});

gulp.task('default', ['less', 'script']);