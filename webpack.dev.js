const path = require("path");
const common = require("./webpack.common");
const merge = require("webpack-merge");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const myProxy = 'http://localhost:9999/';

module.exports = merge(common, {
  mode: "development",
  output: {
    filename: "[name].bundle.js",
    path: path.resolve(__dirname, "dist")
  },
  module: {
    rules: [
      {
        test:/\.scss$/,
        use: [ "style-loader", "css-loader", "sass-loader" ]
      }
    ]
  },
  plugins: [
    new BrowserSyncPlugin({
      files: '**/*.php',
      injectChanges: true,
      proxy:  myProxy
    })
  ]
  
});