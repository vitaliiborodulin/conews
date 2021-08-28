const gulp = require('gulp'),
  less = require('gulp-less'),
  autoprefixer = require('gulp-autoprefixer'),
  gcmq = require('gulp-group-css-media-queries'),
  rigger = require('gulp-rigger'),
  smartgrid = require('smart-grid'),
  del = require('del');

const css = () => {
  return gulp.src('./src/less/style.less')
    .pipe(less())
    .pipe(gcmq())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'))
}

const js = () => {
  return gulp.src('./src/js/*.js')
    .pipe(rigger())
    .pipe(gulp.dest('./assets/js/'))
}

const grid = (done) => {
  delete require.cache[require.resolve('./smartgrid.js')];

  let settings = require('./smartgrid.js');
  smartgrid('./src/less', settings);
  done();
}

const watch = () => {
  gulp.watch('./src/less/**/*.less', gulp.series(css));
  gulp.watch('./src/js/**/*.js', gulp.series(js));
};

const clean = () => {
  return del('./assets/js/');
}

exports.css = css;
exports.js = js;
exports.grid = grid;
exports.watch = watch;
exports.clean = clean;

exports.build = gulp.series(clean, css, js);
exports.default = gulp.series(clean, css, watch);