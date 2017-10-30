/* global module require process */
module.exports = function(grunt) {
  var path = require('path');

  require('load-grunt-config')(grunt, {
    configPath: path.join(process.cwd(), 'grunt/config'),
    jitGrunt: {
      customTasksDir: 'grunt/tasks',
      staticMappings: {
        makepot: 'grunt-wp-i18n',
      },
    },
    data: {
      pkg: grunt.file.readJSON('package.json'),
      pluginSlug: '[plugin_slug]',
      i18n: {
        author: '[author_name]',
        support: '[author_url]',
        mainFile: '[plugin_file]',
        textDomain: '[text_domain]',
        potFilename: '[pot_filename]',
      },
    },
  });
};
