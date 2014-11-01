module.exports = function(grunt) {

  // Configuration de Grunt
  grunt.initConfig({

  // WATCH
  watch: {
	    scripts: {
	        files: ['js/*.js', 'css/*.scss'],
	        tasks: ['uglify', 'sass', 'cssmin'],
	        options: {
	            spawn: false,
	        },
	    }
	},

  // UGLIFY
  uglify: {
    my_target: {
        files: {
          'src/script.min.js': ['js/jquery-1.10.1.min.js', 'js/simpleCart.js', 'js/script.js']              }
      }
    },

  // SASS
  sass: {
    dist: {
      files: {
        'css/style.css': 'css/style.scss'
      }
    }
  },

  // CSS MIN
  cssmin: {
    combine: {
      files: {
        'src/style.min.css': ['css/normalize.css', 'css/style.css']
      }
    }
  }
  })

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Définition des tâches Grunt
  grunt.registerTask('default', ['uglify', 'sass','cssmin', 'watch'])

}
