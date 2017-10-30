/* global module */
module.exports = {
  main: {
    options: {
      mode: 'zip',
      archive: '<%= pluginSlug %>-<%= pkg.version %>.zip'
    },
    files: [{
      expand: true,
      cwd: 'build/',
      src: ['**'],
      dest: ''
    }]
  }
};
