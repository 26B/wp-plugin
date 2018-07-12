/* global module */
module.exports = function(grunt) {
  grunt.registerTask("default", [
    "composer:install:no-dev",
    "composer:dump-autoload:optimize:no-dev",
    "i18n",
    "readme"
  ]);
};
