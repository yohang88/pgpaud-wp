module.exports = function(grunt) {

    grunt.initConfig({

        less: {
            production: {
                options: {
                    cleancss: false
                },
                files: {
                    "./style.css":"./less/style.less",
                }
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            common: {
                src: [
                    './assets/vendor/bootstrap/dist/js/bootstrap.js',
                    './js/common.js',
                ],
                dest: './js/common.min.js',
            },
        },
        uglify: {
            options: {
                mangle: false
            },
            common: {
                files: {
                    './js/common.min.js': './js/common.min.js',
                }
            }
        },
        phpunit: {
            classes: {
            },
            options: {
            }
        },
        watch: {
            js: {
                files: [
                './common.js',
                ],
                tasks: ['concat:common','uglify:common'],
                options: {
                    livereload: true
                }
            },
            less: {
                files: ['./less/*.less'],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            }
        }
    });


grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-less');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-phpunit');

grunt.registerTask('default', ['less','concat','uglify']);

};
