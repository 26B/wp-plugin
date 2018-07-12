/* global module require process */
module.exports = function(grunt) {
  var path = require("path");

  require("load-grunt-config")(grunt, {
    configPath: path.join(process.cwd(), "grunt/config"),
    jitGrunt: {
      customTasksDir: "grunt/tasks",
      staticMappings: {
        makepot: "grunt-wp-i18n"
      }
    },
    data: {
      i18n: {
        author: "[author_name]",
        support: "[author_url]",
        pluginSlug: "[plugin_slug]",
        mainFile: "[plugin_slug]",
        textDomain: "[plugin_slug]",
        potFilename: "[plugin_slug]"
      },
      badges: {
        packagist_stable: "",
        packagist_downloads: "",
        packagist_license: "",
        codacy_grade: "",
        codeclimate_grade: ""
      }
    }
  });
};
