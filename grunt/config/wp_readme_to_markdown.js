/* global module */
module.exports = function(grunt, options) {
  return {
    main: {
      files: {
        'README.md': 'README.txt'
      },
      options: {
        post_convert: function(readme) {
          var extra = '';

          Object.keys(options.badges).forEach(function(key) {
            if (options.badges[key] !== '') {
              extra += options.badges[key] + '\n';
            }
          });

          if (extra === '') {
            return readme;
          }

          return extra + '\n' + readme;
        }
      }
    }
  };
};
