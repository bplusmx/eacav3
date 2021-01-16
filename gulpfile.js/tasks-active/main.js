// ==== MAIN ==== //

var gulp = require('gulp');

// Default task chain: build -> (livereload or browsersync) -> watch
gulp.task('default', ['watch']);

gulp.task('theme-init', ['theme-base', 'theme-base-clean', 'theme-base-replace', 'theme-components']);

gulp.task('theme-components', [
    'theme-fontawesome-fonts',
    'theme-bootstrap-fonts',
    'theme-flatui-fonts',
    'theme-flatui-res'
]);

// Build a working copy of the theme
gulp.task('build', ['images', 'scripts', 'styles-build', 'theme', 'bump-build']);

// Dist task chain: wipe -> build -> clean -> copy -> images/styles
// NOTE: this is a resource-intensive task!
gulp.task('dist', ['images-dist', 'styles-dist', 'bump-version-dist']);
