// ==== CONFIGURATION ==== //

// Project paths
var project     = 'eacav3',
    themeName   = 'acapulco',
    baseTheme   = './_strap/',
    options     = './Titan-Framework/',
    src         = './src/',
    build       = '../' + themeName + '/',
    dist        = '../' + themeName + '-dist/',
    bower       = './components/',
    composer    = './vendor/';

// Project settings
module.exports = {
    bower: {
        // Copies `normalize.css` from `bower_components` to `src/scss` and renames
        // it to allow for it to imported as a Sass file
        normalize: {
            src:    bower + 'normalize.css/normalize.css',
            dest:   src   + 'scss',
            rename: '_normalize.scss'
        }
    },

    browsersync: {
        files: [
            build + '/**',
            '!' + build + '/**.map' // Exclude map files
        ],
        notify: false,  // In-line notifications (the blocks of text saying whether you are connected to the BrowserSync server or not)
        open:   true,  // Set to false if you don't like the browser window opening automatically
        port:   3000, // Port number for the live version of the site; default: 3000
        proxy:  'localhost:8080', // Using a proxy instead of the built-in server as we have server-side rendering to do via WordPress
        watchOptions: {
            debounceDelay: 2000 // Delay for events called in succession for the same file/event
        }
    },
    // Images
    images: {
        build: { // Copies images from `src` to `build`; does not optimize
            src:  src + '**/*(*.png|*.jpg|*.jpeg|*.gif)',
            dest: build
        },
        dist: {
            src: [
                dist + '**/*(*.png|*.jpg|*.jpeg|*.gif)',
                '!' + dist + 'screenshot.png'
            ],
            // Optimización de imagenes
            imagemin: {
                optimizationLevel:  7,
                progressive:        true,
                interlaced:         true
            },
            dest: dist
        }
    }, // end images

    // Live reload browser
    livereload: {
        port: 35729
    }, // end livereload

    // Javascripts
    scripts: {
        components: bower,

        // Bundles are defined by a name and an array of chunks to concatenate;
        // WARNING: it's up to you to manage dependencies!
        bundles: {
            core:[
                'core'
            ],
            hr: [
                'headroom',
                'core'
            ],
            hr_pg8: [
                'headroom',
                'pg8',
                'core'
            ],
            pg8: [
                'pg8',
                'core'
            ],
            jquery: [
                'jquery'
            ],
			bootstrap: [
				'bootstrap'
			],
            all: [
                'jquery',
                'bootstrap',
                'core'
            ]
        },

        // Chunks are arrays of globs matching source files that combine to provide specific functionality
        chunks: {
            core:       [
                src + 'js/navigation.js',
                src + 'js/core.js'
            ],
            headroom:   [
                bower + 'headroom.js/dist/headroom.js',
                bower + 'headroom.js/dist/jQuery.headroom.js',
                src   + 'js/headroom.js'
            ],
            pg8: [
                bower + 'html5-history-api/history.iegte8.js',
                bower + 'spin.js/spin.js',
                bower + 'spin.js/jquery.spin.js',
                bower + 'wp-ajax-page-loader/wp-ajax-page-loader.js',
                src   + 'js/page-loader.js'
            ],
			jquery: [
				bower + 'jquery/dist/jquery.js',
			],
            bootstrap: [
                bower + 'bootstrap/dist/js/bootstrap.js',
            ]
        },

        // Where the scripts end up
        dest: build + 'js/',

        // Lint core scripts (for everything else we're relying on the original authors)
        lint: {
            src: [src + 'js/**/*.js']
        },

        minify: {
            src: [
                build + 'js/**/*.js',
                '!' + build + 'js/**/*.min.js' // Avoid recursive min.min.min.js
            ],
            rename: {
                suffix: '.min' // Agrega el .min a los archivos minificados
            },
            uglify: {
            },
            dest: build + 'js/'
        },

        // Script filenames will be prefaced with this
        // (optional; leave blank if you have no need for it but be sure to change the corresponding
        // value in `src/inc/assets.php`)
        namespace: ''
    }, // end scripts

    styles: {
		components: bower,

        build: {
            src: [
                'less/*.less',
				src + 'less/*.less',
                '!' + 'less/_*.less', // Ignore partials
                '!' + src + 'less/_*.less' // Ignore partials
            ],
            dest: build + 'css'
        },
        dist: {
            src: [
                build + 'css/**/*.css',
                '!' + build + 'css/**/*.min.css'
            ],
            minify: {
                keepSpecialComments: 1,
                roundingPrecision: 3
            },
            dest: dist
        },
        autoprefixer: {
            browsers: [
                '> 3%',
                'last 2 versions',
                'ie 9',
                'ios 6',
                'android 4'
            ]
        },
        rename: {
            suffix: '.min'
        },
        minify: {
            keepSpecialComments: 1,
            roundingPrecision: 3
        },
        less: {
        },
        rubySass: { // Don't forget to run `gem install sass`; Compass is not included by default
            loadPath: bower, // Adds the `bower_components` directory to the load path so you can @import directly
            precision: 8,
            'sourcemap=none': true // Not yet ready for prime time! Sass 3.4 has srcmaps on by default but this causes some problems from the Gulp toolchain
        },
        sass: { // For future reference: settings for Libsass, a promising project that hasn't reached feature parity with Ruby Sass just yet
            includePaths: [bower],
            precision: 8
        }
    }, // end styles

    theme: {
        name: themeName,
        basePath: baseTheme,
        srcPath: src,
        destPath: build,
		components: bower,

        lang: {
            src: src + 'languages/**/*', // Glob matching any language files you'd like to copy over
            dest: build + 'languages/'
        },
        base: {
            src: baseTheme + '**/*.php',
            resources: baseTheme + '**/*(*.css|*.js|*.png|*.jpeg|*.gif)',
            dest: src
        },
        custom: {
            src: src + '**/*(*.php|*.css|*.js|*.png|*.jpeg|*.gif|.remote-sync.json)',
            dest: build
        },
		vendors: {
			src: [
				// Mobile detect
                composer + 'mobiledetect/**/*.php', composer + 'mobiledetect/**/*.json',
				// TGM Plugin Activation
                composer + 'tgmpa/**/*.php', composer + 'tgmpa/languages/**',
                // Titan Framework
                composer + 'gambitph/**/*(*.php|*.css|*.js)', '!' + composer + 'gambitph/**/gulpfile*', '!' + composer + 'gambitph/**/test-*', '!' + composer + 'gambitph/**/bootstrap.php', '!' + composer + 'gambitph/**/shims.php', '!' + composer + 'gambitph/**/tests'
            ],
            dest: build + 'vendor/'
		}
    }, // end theme

    utils: {
        clean: [build + '**/.DS_Store'], // A glob matching junk files to clean out of `build`
        wipe: [dist], // Clean this out before creating a new distribution copy
        dist: {
            src: [
                build + '**/*',
                //'!' + build + '**/*.min.css'
            ],
            dest: dist
        }
    }, // end utils

    watch: { // What to watch before triggering each specified task
        src: {
            styles:       ['less/**/*.less', src + 'less/**/*.less'],
            scripts:      [
                src   + 'js/**/*.js',
                bower + '**/*.js'
            ],
            images:       src + '**/*(*.png|*.jpg|*.jpeg|*.gif)',
            theme:        src + '**/*.php',
            livereload:   [
                build + '**/*'
            ]
        },
        watcher: 'livereload' // Who watches the watcher? Easily switch between BrowserSync ('browsersync') and Livereload ('livereload')
    } // end watch

}; // end module.exports
