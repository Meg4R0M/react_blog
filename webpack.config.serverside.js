var Encore = require('@symfony/webpack-encore');

Encore
    // directory where all compiled assets will be stored
    .setOutputPath('public/build/js/')
    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/')
    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()
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
    // will output as app/Resources/webpack/server-bundle.js
    .addEntry('server-bundle', './assets/js/entryPoint.js')
    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()
    .disableSingleRuntimeChunk()

// export the final configuration
module.exports = Encore.getWebpackConfig()
