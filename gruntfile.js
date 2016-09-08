module.exports = function(grunt) {
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	
	grunt.initConfig({
		compass: {
			dev: {
				options: {
					config: 'contrib.rb'
				} //options
			} //dev
		}, //compass
		uglify: {
			my_target: {
				files: {
					'js_min/script-min.js':['js/*.js']
				}//files
			} //my_target
		}, //uglify
		watch: {
			options: { livereload: true },
			scripts: {
				files: ['js/*.js'],
				tasks: ['uglify:my_target']
			}, //scripts
			html: {
				files:['*.html']
			}, //html
			sass: {
				files: ['sass/*.scss'],
				tasks: ['compass:dev']
			},//sass
			css: {
				files: ['css/*.css']
			}//css
		}//watch

	}) //initConfig
	
	grunt.registerTask('default', 'watch');
} //exports