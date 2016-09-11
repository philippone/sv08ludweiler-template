module.exports = function (grunt) {

    var dest = "../../Sites/templates/joomboot";
    // var dest = "release";

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            default: {
                files: [
                    {
                        expand: true,
                        cwd: 'src/scss',
                        src: ['*.scss'],
                        dest: 'src/css',
                        ext: '.css',
                        extDot: 'last'
                    }
                ],
                options: {
                    includePaths: [],
                    sourcemap: "none",
                    trace: true,
                    update: true,
                    style: 'compact'
                }
            }
        },

        watch: {
            grunt: {
                files: ['Gruntfile.js'],
            },

            sass: {
                files: [
                    'scss/*.scss', 'scss/**/*.scss', 'scss/**/**/*.scss', 'scss/**/**/**/*.scss',
                    'scss/**/**/**/**/*.scss'
                ],
                tasks: ['sass', 'copy']
            },

            others: {
                files: [
                    '*.php', '**/.php', '**/**/.php', '*.js', '**/*.js', '**/**/*.js'
                ],
                tasks: ['copy']
            }
        },

        copy: {
            main: {
                files: [
                    // includes files within path
                    {
                        expand: true,
                        cwd: 'src',
                        src: '**',
                        dest: dest,
                    }
                ]
            },
            materialize: {
                files: [
                    {
                        expand: true,
                        cwd: 'src/materialize',
                        src: "*",
                        dest: dest + '/css'
                    }
                ]
            },
            module: {
                files: [
                    // includes files within path
                    {
                        expand: true,
                        cwd: 'modules/',
                        src: '**',
                        dest: '../../Sites/modules'
                    }
                ]
            }
        },

        clean: ["src/css/**/**", "src/css/**", "release/*"]

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default', ['clean', 'sass']);
    grunt.registerTask('release', ['default', 'copy:main']);

    grunt.registerTask('module', ['copy:module']);

};
