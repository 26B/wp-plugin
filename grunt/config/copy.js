/* global module */
module.exports = {
  main: {
    expand: true,
    src: [
      '**',
      '!**/.*',
      '!<%= pluginSlug %>-*.zip',
      '!build/**',
      '!TODO.md',
      '!Gruntfile.js',
      '!grunt/**',
      '!package.json',
      '!node_modules/**',
      '!svn/**',
      '!tests/**',
    ],
    dest: 'build/<%= pluginSlug %>'
  }
};
