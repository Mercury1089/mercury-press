var gulp = require('gulp');

var sass = require('gulp-sass');
var postcss = require('gulp-postcss');

var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');

gulp.task('sass', function() {
  gulp.src("./sass/style.sass")
  .pipe(sass.sync())
});

gulp.task('sass', function () {
  var processors = [
    autoprefixer,
    cssnano
  ];

  return gulp.src('./sass/style.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(processors))
        .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function() {
  gulp.watch('./sass/**/*.s*ss', ['sass']);
});