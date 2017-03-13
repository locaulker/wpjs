var gulp = require('gulp'),
uglify = require('gulp-uglify');


gulp.task('runnow', function() {
  console.log("Running Gulp Tasks!");

  var d = new Date();
  var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

  console.log(timestamp);
});

gulp.task('default', ['runnow']);
