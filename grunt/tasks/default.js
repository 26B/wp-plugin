/* global module */
module.exports = function(grunt) {
  grunt.registerTask('default', [
    'clean',
    'composer:install',
    'i18n',
  ]);
};
