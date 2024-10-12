const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
   entry: './js/app.js', // Your JS entry file
   output: {
      filename: 'app.js', // Compiled JS bundle
      path: path.resolve(__dirname, 'dist'),
   },
   module: {
      rules: [
         {
            test: /\.scss$/, // For SCSS compilation
            use: [
               MiniCssExtractPlugin.loader,
               'css-loader',   // Translates CSS into CommonJS
               'sass-loader',  // Compiles Sass to CSS
            ],
         },
      ],
   },
   plugins: [
      new MiniCssExtractPlugin({
         filename: 'app.css', // Name of the generated CSS file
      }),
      new BrowserSyncPlugin(
         {
            proxy: 'http://d4doors.local', // Proxy the WordPress local site
            files: [
               '**/*.php',       // Watch PHP files for changes
               'dist/*.css',     // Watch for CSS changes
               'dist/*.js',      // Watch for JS changes
            ],
            open: false,        // Don't automatically open the browser
            reloadDebounce: 500, // Give some debounce time
            reloadOnRestart: true,
            cache: false, // Disable browser cache
         },
         { reload: true }
      ),
   ],
   mode: 'development', // For fast rebuilds and better debugging
   devtool: 'source-map', // To help with debugging in the browser
};
