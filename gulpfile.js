var gulp         = require('gulp'),
    stylus       = require('gulp-stylus'),
    jade         = require('gulp-jade'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync  = require('browser-sync').create(),
    reload       = browserSync.reload,
    concat       = require('gulp-concat');


// Stylus

gulp.task('stylus', function(){
  return gulp.src('src/styles/index.styl')
    .pipe(stylus({
      include: ['node_modules']
    }))
    .pipe(concat('style.css'))
    .pipe(autoprefixer())
    .pipe(gulp.dest('out/styles/'))
    .pipe(reload({stream: true}));
});


// Jade

gulp.task('jade', function(){
  return gulp.src('src/**/*.jade')
    .pipe(jade())
    .pipe(gulp.dest('out/'));
});


// Server

gulp.task('server', function() {
  browserSync.init({
    server: {
      baseDir: "./out/"
    }
  });
  gulp.watch('src/styles/**/*.styl', ['stylus']);
  gulp.watch('src/**/*.jade', ['jade']).on('change', reload);
});


// Default

gulp.task('default', ['server']);
