/* global module */
module.exports = {
  target: {
    options: {
      cwd: '',
      domainPath: '/languages',
      potFilename: '<%= i18n.potFilename %>.pot',
      mainFile: '<%= i18n.mainFile %>.php',
      include: [],
      exclude: [
        'assets/',
        'bin/',
        'build/',
        'languages/',
        'node_modules',
        'release/',
        'svn/',
        'tests/',
        'tmp',
        'vendor',
      ],
      potComments: '',
      potHeaders: {
        poedit: true,
        'x-poedit-keywordslist': true,
        language: 'en_US',
        'report-msgid-bugs-to': '<%= i18n.support %>',
        'last-translator': '<%= i18n.author %>',
        'language-Team': '<%= i18n.author %>',
      },
      type: 'wp-plugin',
      updateTimestamp: true,
      updatePoFiles: true,
      processPot: null,
    },
  }
};
