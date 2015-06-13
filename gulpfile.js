var gulp         = require('gulp'),
    stylus       = require('gulp-stylus'),
    jade         = require('gulp-jade'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync  = require('browser-sync').create(),
    reload       = browserSync.reload,
    concat       = require('gulp-concat');


// Stylus

gulp.task('stylus', function(){
  return gulp.src('themes/summer-house/styles/index.styl')
    .pipe(stylus({
      include: ['node_modules'],
      compress: true
    }))
    .pipe(concat('styles.css'))
    .pipe(autoprefixer())
    .pipe(gulp.dest('themes/summer-house/styles/'))
    .pipe(reload({stream: true}));
});

// Server

gulp.task('server', function() {
  browserSync.init({
    notify: false
  });
  gulp.watch('themes/summer-house/styles/**/*.styl', ['stylus']);
  gulp.watch('themes/summer-house/**/*.php').on('change', reload);
});


// Default

gulp.task('default', ['server']);
