/*
	Run the following commands to install npm modules on cmd
	> npm install grunt init
	> npm install grunt-contrib-less
	> npm install grunt-contrib-uglify
	> npm install grunt-contrib-watch
*/

module.exports = function(grunt) {
    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
		/* LESS: compresses and combines all .less files into a single .css file */
		less: {
			dist: {
				options: {
					style: "expanded",
					debugInfo: true,
					lineNumbers: true,
					paths: ["./less"],
					expand: false,
				},
				files: {
					"./dist/css/informatica.css": ["./less/informatica.less"]
				}
			}
		},
		
		
		uglify: {
			dist: {
				src: "./scripts/*.js",
				dest: "./dist/js/informatica.js",
				expanded: true,
			}
		},
		
		watch: {
			options: {
				livereload: true
			},
			css: {
				files: "./less/*.less",
				tasks: "less"
			},
			scripts: {
				files: "./scripts/*.js",
				tasks: "uglify",
			}
		}
	});
	
	
	grunt.loadNpmTasks("grunt-contrib-less");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-contrib-watch");
	
	/* Set Default task */
	grunt.registerTask("default", ["watch"])
};