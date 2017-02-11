var gulp = require('gulp');

gulp.task('copy', function() {
	return gulp.src('./node_modules/material-design-icons/iconfont/*')
               .pipe(gulp.dest('./resources/assets/sass/fonts/'));
});

gulp.task('default',['copy']);

