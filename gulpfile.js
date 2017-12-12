var gulp = require('gulp'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cssImport = require('postcss-import'),
mixins = require('postcss-mixins');
keyframes = require('postcss-mq-keyframes');

gulp.task('styles', function() {

  return gulp.src('dev/css/style.css')
  .pipe(postcss([cssImport, mixins, keyframes, cssvars, nested, autoprefixer]))
  .on('error', function(errorInfo) {
    console.log(errorInfo.toString());
    this.emit('end');
  })
  .pipe(gulp.dest('temp'));

});

var gulp = require('gulp'),
watch = require('gulp-watch'),
connect = require('gulp-connect-php'),
browserSync = require('browser-sync').create();



gulp.task('watch', function() {

    var files = [
      './css/style.css',
      './*.php'
    ];

    browserSync.init(files, {
  		proxy: "http://jut:8888/",
  		notify: false,

	   });


    gulp.task('connect', function() {
        connect.server();
    });


    gulp.watch('*.php').on('change', function () {
      browserSync.reload();
    });

    watch('dev/css/**/*.css', function () {

      gulp.start('cssInject');

    });
});

gulp.task('cssInject', ['styles'], function() {
   return gulp.src('temp/style.css')
   .pipe(browserSync.stream());
});
