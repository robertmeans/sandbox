module.exports = function(grunt) {

    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),


    uglify: {
      my_target: {
        files: {
          'scripts/scripts.js': ['components/javascript-to-compile/scripts.js']
          // if you need more... (don't forget the comma!)
          // 'scripts/header-scripts.js': ['components/javascript-to-compile/header-scripts.js']
        } //files
      } //my_target
    }, //uglify   

		/* Sass */
		sass: {
      // dev: {
      //   options: {
      //     style: 'expanded',
      //     sourcemap: 'none'
      //   },
      //   files: {
      //     'style-expanded.css': 'components/sass/style-darkmode.scss'
      //   }
      // },
		  dist: {
		  	options: {
		  		style: 'compressed',
		  		sourcemap: 'none'
		  	},
		  	files: {
          'ewd-custom.css': 'components/sass/style.scss'
		  	}
		  }
		},
		/* Autoprefixer */
		autoprefixer: {
			options: {
				browsers: ['last 8 versions']
			},
			// prefix all files
			multiple_files: {
				expanded: true, 
				flatten: true,
				src: '*.css',
				dist: ''
			}
		},

	  	/* Watch */
    watch: {
      options: { livereload: true },
      scripts: {
        files: ['components/javascript-to-compile/*.js'],
        tasks: ['uglify']
      }, //scripts      
      css: {
        files: '**/*.scss',
        tasks: ['sass','autoprefixer']
      }, // css
      hypertext: {
        files: ['*.php','*.htm','_includes/*.php','_logged_in/*.php', 'nav/*.php']
      } //hypertext
    }, //watch

	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.registerTask('default',['watch']);
}