/* global module */
module.exports = function(grunt) {
  grunt.registerTask('dist', [
    'composer:install:no-dev',
    'composer:dump-autoload:optimize:no-dev',
    'clean',
    'copy',
    'compress',
    'clean',
  ]);
};
