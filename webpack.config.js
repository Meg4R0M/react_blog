var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .configureBabel(function(babelConfig) {
      // add additional presets
      babelConfig.plugins.push('@babel/plugin-proposal-class-properties');
      babelConfig.plugins.push('transform-object-rest-spread');
      babelConfig.plugins.push('transform-react-jsx');

      // no plugins are added by default, but you can add some
      // babelConfig.plugins.push('styled-jsx/babel');
    }, {
      // node_modules is not processed through Babel by default
      // but you can whitelist specific modules to process
      // include_node_modules: ['foundation-sites']

      // or completely control the exclude
      // exclude: /bower_components/
    })
    .addStyleEntry('css/main', './assets/styles/main.scss')
    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()
    .addEntry('js/app', './assets/js/index.js')
    .addEntry('js/admin', './assets/js/entryPoint.js')
    .enableSassLoader()
    .enableReactPreset()
    .disableSingleRuntimeChunk()
;

module.exports = Encore.getWebpackConfig();
