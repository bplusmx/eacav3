// ==== IMAGES ==== //

var gulp        = require('gulp')
  , plugins     = require('gulp-load-plugins')({ camelize: true })
  , bump        = require('gulp-bump')
  , config      = require('../../gulpconfig').theme
;


gulp.task('bump-build', ['theme'], function() {
  return gulp.src(config.srcPath + 'style.css')
  .pipe(bump({
    type: 'prerelease'
  }))
  .pipe(gulp.dest(config.srcPath))
  .pipe(gulp.dest(config.destPath));
});

// Copy changed images from the source folder to `build` (fast)
gulp.task('bump-version', ['theme'], function() {
  return gulp.src(config.srcPath + 'style.css')
  .pipe(bump({
    type: 'patch'
  }))
  .pipe(gulp.dest(config.srcPath))
  .pipe(gulp.dest(config.destPath));
});

// Optimize images in the `dist` folder (slow)
gulp.task('bump-version-dist', ['utils-dist'], function() {
  return gulp.src(config.srcPath + 'style.css')
  .pipe(bump({
    type: 'minor'
  }))
  .pipe(gulp.dest(config.srcPath))
  .pipe(gulp.dest(config.destPath));
});
