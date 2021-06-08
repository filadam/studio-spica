const version = '1.0.1';

const path = require('path');
const webpack = require('webpack');
const publicPath = require('./compiler/publicPath');

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TerserJSPlugin = require('terser-webpack-plugin');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

const {context, devtool, outputFolder, publicFolder} = require('./compiler/config');

module.exports = (env, options) => {
    const devMode = options.mode !== 'production';

    return {
        mode: devMode ? 'development' : 'production',
        devtool: devMode ? devtool : false,
        entry: {
            vendors: [
                'jquery',
                'bootstrap',
            ],
            main: './assets/js/index.js'
        },
        output: {
            path: path.resolve(outputFolder),
            publicPath: publicPath(publicFolder),
            filename: devMode ? 'js/[name].bundle.js' : 'dist/js/[name].bundle.min.js'
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                },
                {
                    test: /\.(css|sass|scss)$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        {
                            loader: 'css-loader',
                            options: {
                                importLoaders: 2,
                                sourceMap: true
                            }
                        },
                        {
                            // Run postcss actions
                            loader: 'postcss-loader',
                            options: {
                                // `postcssOptions` is needed for postcss 8.x;
                                // if you use postcss 7.x skip the key
                                postcssOptions: {
                                    // postcss plugins, can be exported to postcss.config.js
                                    plugins: function () {
                                        return [
                                            require('autoprefixer')
                                        ];
                                    }
                                }
                            }
                        },
                        {
                            loader: "sass-loader",
                            options: {
                                sourceMap: true
                            }
                        }
                    ],
                },
                {
                    test: /\.(png|svg|jpg|gif)$/,
                    use: {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: 'img/'
                        }
                    }
                },
                {
                    test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
                    use: {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: 'fonts/'
                        }
                    }
                }

            ]
        },
        optimization: {
            minimizer: [
                new TerserJSPlugin({}),
                new OptimizeCSSAssetsPlugin({})
            ],
            splitChunks: {
                cacheGroups: {
                    defaultVendors: {
                        test: /[\\/]node_modules[\\/]/,
                        priority: -10,
                        reuseExistingChunk: true
                    },
                    default: {
                        minChunks: 2,
                        priority: -20,
                        reuseExistingChunk: true
                    }
                }
            }
        },
        plugins: [
            new webpack.ProvidePlugin({
                $: path.resolve(path.join(__dirname, 'node_modules/jquery')),
                jQuery: path.resolve(path.join(__dirname, 'node_modules/jquery')),
                'window.jQuery': path.resolve(path.join(__dirname, 'node_modules/jquery')),
            }),

            new MiniCssExtractPlugin({
                // Options similar to the same options in webpackOptions.output
                // both options are optional
                filename: devMode ? 'css/[name].css' : 'dist/css/[name].min.css',
                chunkFilename: devMode ? '[id].css' : '[id].min.css',
            }),
        ]
    };
};
