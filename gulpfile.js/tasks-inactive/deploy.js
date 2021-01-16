// ==== deploy ==== //

var gulp        = require('gulp')
  , plugins     = require('gulp-load-plugins')({ camelize: true })
  , config      = require('../../gulpconfig').scripts
;

/** ****************************************************************************
 * 
 *  Variables
 *  
 */

/* Stagging server */
var ftp_host       = 'e-acapulco.com', 
    ftp_user       = 'eaca',
    ftp_password   = 'bls0180071604', 
    ftp_path       = '/www/wp-content/themes/eacav3';
    
var file_globs = [
    'admin/**',
    'partials/**',
    'parts/**',
    'vendor/**',
    'icons/**',
    'img/**',
    'css/**',
    'js/**',
    '*.php',
    '*.css'
];

/** ****************************************************************************
 * 
 *  Conexión al servidor para cargar archivos
 *  
 */
gulp.task('deploy', function()
{
    var options = {
        buffer: false
    };
    
    return gulp.src(file_globs, options)
        .pipe(sftp({
            host:       ftp_host,
            user:       ftp_user,
            pass:       ftp_password,
            remotePath: ftp_path
        }));
});