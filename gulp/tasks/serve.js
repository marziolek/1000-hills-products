'use strict';

var serveTask = function (gulp, plugins, config, helpers, generator_config) {
  gulp.task('serve', ['styles-watch', 'templates-watch', 'assets-watch'], function() {
    
    var name = generator_config.nameSlug;
    var browserSyncConfig = {
      proxy: {
        target: name+'.dev',
        reqHeaders: {
          'x-chisel-proxy': '1'
        }
      },
      online: true
    }
    
    plugins.browserSync.init(browserSyncConfig);

    gulp.watch(config.src.styles, ['styles-watch']);
    gulp.watch(config.src.templatesWatch, ['templates-watch']); // Build templates in front-end project
    gulp.watch(config.src.assets, ['assets-watch']);
    gulp.watch('*.php').on('change', plugins.browserSync.reload); // PHP files in WP projects
  });
};

module.exports = serveTask;
