// ==== THEME ==== //

var gulp        = require('gulp')
  , plugins     = require('gulp-load-plugins')({ camelize: true })
  , del         = require('del')
  , wppot 		= require('gulp-wp-pot')
  , replace     = require('gulp-string-replace')
  , config      = require('../../gulpconfig').theme
;

// Copy _strap theme source files to the `build` folder
gulp.task('theme-base', function() {
  return gulp.src(config.base.src)
  .pipe(plugins.changed(config.base.src))
  .pipe(gulp.dest(config.base.dest));
});

// Copy _strap resources to src folder
gulp.task('theme-base-resources', function() {
  return gulp.src(config.base.resources)
  .pipe(plugins.changed(config.base.resources))
  .pipe(gulp.dest(config.base.dest));
});

// replace _s string to theme name
gulp.task('theme-base-replace', ['theme-base', 'theme-base-resources'], function() {
  return gulp.src(config.base.src)
  .pipe(replace(/\b_s\b/g, config.name))
  .pipe(replace(/\b_s_/g, config.name + '_'))
  .pipe(replace(/\b_s-/g, config.name + '-'))
  .pipe(replace(/\b'_s'/g, config.name))
  .pipe(gulp.dest(config.base.dest));
});

// Clean _strap not used files on src folder
gulp.task('theme-base-clean', ['theme-base-resources'], function() {
  return del([
    config.base.dest + 'bootstrap',
    config.base.dest + 'saas'
  ], {force: true});
});

// Copy fontawesome fonts from components theme to src folder
gulp.task('theme-bootstrap-fonts', function() {
  return gulp.src(config.components + 'bootstrap/dist/fonts/**')
  .pipe(plugins.changed(config.components + 'bootstrap/dist/fonts'))
  .pipe(gulp.dest(config.destPath + 'fonts'));
});

// Copy fontawesome fonts from components theme to src folder
gulp.task('theme-flatui-fonts', function() {
  return gulp.src(config.components + 'flat-ui/dist/fonts/**')
  .pipe(plugins.changed(config.components + 'flat-ui/dist/fonts/**'))
  .pipe(gulp.dest(config.destPath + 'fonts'));
});

// Copy flat-ui resources from components theme to src folder
gulp.task('theme-flatui-res', function() {
  return gulp.src(config.components + 'flat-ui/dist/img/**')
  .pipe(plugins.changed(config.components + 'flat-ui/dist/img/**'))
  .pipe(gulp.dest(config.destPath + 'img'));
});

// Copy fontawesome fonts from components theme to src folder
gulp.task('theme-fontawesome-fonts', function() {
  return gulp.src(config.components + 'font-awesome/fonts/**')
  .pipe(plugins.changed(config.components + 'flat-ui/fonts/**'))
  .pipe(gulp.dest(config.destPath + 'fonts'));
});

// Copy everything under `src/languages` indiscriminately
gulp.task('theme-lang', ['theme-wppot'], function() {
  return gulp.src(config.lang.src)
  .pipe(plugins.changed(config.lang.dest))
  .pipe(gulp.dest(config.lang.dest));
});

// Copy PHP source files to the `build` folder
gulp.task('theme-code', ['theme-lang'], function() {
  return gulp.src(config.custom.src)
  .pipe(plugins.changed(config.custom.src))
  .pipe(gulp.dest(config.custom.dest));
});

// Copy vendor source files to `build` folder
gulp.task('theme-vendors', ['theme-code'], function() {
  return gulp.src(config.vendors.src)
  .pipe(gulp.dest(config.vendors.dest));
});

// Copy vendor source files to `build` folder
gulp.task('theme-wppot', function() {
  return gulp.src(config.srcPath + '/**/*.php')
  .pipe( wppot( {
	  domain: config.name,
	  package: config.name,
	  team: 'bPlus TI <info@bplus.mx>'
  } ) )
  .pipe(gulp.dest(config.srcPath + 'languages/es_MX.pot'));
});

// Copy resources files to the `build` folder
gulp.task('theme-resources', ['theme-code'], function() {
  return gulp.src(config.custom.src)
  .pipe(plugins.changed(config.custom.dest))
  .pipe(gulp.dest(config.custom.dest));
});

// All the theme tasks in one
gulp.task('theme', ['theme-lang', 'theme-components', 'theme-code']);
