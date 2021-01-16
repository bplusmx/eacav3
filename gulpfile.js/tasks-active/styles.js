// ==== STYLES ==== //

var gulp          = require('gulp'),
    gutil         = require('gulp-util'),
	uglify        = require('gulp-uglify'),
    gzip          = require('gulp-gzip'),
	merge         = require('merge-stream'),
    plugins       = require('gulp-load-plugins')({ camelize: true }),
    config        = require('../../gulpconfig').styles,
    autoprefixer  = require('autoprefixer')
;

// Build stylesheets from source Sass files, autoprefix, and make a minified copy (for debugging)
gulp.task('styles', function()
{
    return gulp.src(config.build.src)
    .pipe(plugins.less())
    .on('error', gutil.log) // Log errors instead of killing the process
    .pipe(plugins.postcss([autoprefixer(config.autoprefixer)]))
    .pipe(gulp.dest(config.build.dest)) // Drops the unminified CSS file into the `build` folder
    .pipe(plugins.rename(config.rename))
    .pipe(plugins.minifyCss(config.minify))
    .pipe(gulp.dest(config.build.dest)); // Drops a minified CSS file into the `build` folder for debugging
});

// Copy stylesheets from the `build` folder to `dist` and minify them along the way
gulp.task('styles-build', ['styles'], function()
{
	return gulp.src([
        config.build.dest + '/*.css',
		'!' + config.build.dest + '/all.css',
        '!' + config.build.dest + '/*.min.css'
    ])
    .pipe(plugins.concat('all.css'))
    .pipe(gulp.dest(config.build.dest))
    .pipe(plugins.rename(config.rename))
    .pipe(plugins.minifyCss(config.minify))
    .pipe(gzip())
    .pipe(gulp.dest(config.build.dest));
});

// Copy stylesheets from the `build` folder to `dist` and minify them along the way
gulp.task('styles-dist', ['utils-dist', 'styles-build'], function()
{
    return gulp.src(config.dist.src)
    .pipe(gulp.dest(config.dist.dest));
});
