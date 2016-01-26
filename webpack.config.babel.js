'use strict';

module.exports = (function() {
	var Webpack              = require('webpack');
	var WebpackOnBuildPlugin = require('on-build-webpack');
	var ExtractTextPlugin    = require('extract-text-webpack-plugin');
	var PathRewriterPlugin   = require('webpack-path-rewriter');
	var ChildProcess         = require('child_process');
	var path                 = require('path');

	var packageInformation   = require('./package.json');
	var packageUserInformation	= require('./package.user.json');

	var PRODUCTION = process.env.NODE_ENV === 'production';
	var HASH_FILE = PRODUCTION ? '[hash:8].[ext]' : '[name]-[hash:8].[ext]';
	var HASH_BUNDLE = PRODUCTION ? '[name]-[chunkhash:8]' : '[name]-dev';

	var CONFIG;

	var ENTRY_POINT_GLOBAL = {
		'global': './app.entry.js'
	};

	var ENTRY_POINTS = {
		'developerdashboardprojectcustomerideas'   : './js/DeveloperDashboardProjectCustomerIdeas.js',
		'developerdashboardprojectmessaging'       : './js/DeveloperDashboardProjectMessaging.js',
		'developerdashboardprojectcampaignoverview': './js/DeveloperDashboardProjectCampaignOverview.js',
		'developerdashboardprojectcampaigncreate'  : './js/DeveloperDashboardProjectCampaignCreate.js',
		'userdashboardprojects'                    : './js/UserDashboardProjects.js',
		'publicprojectoverview'                    : './js/PublicProjectOverview.js'
	};

	function init() {
		makeConfig();
	}

	function getAllEntryPoints() {
		let allEntryPoints = {};

		Object.keys(ENTRY_POINT_GLOBAL).forEach(el => {
			allEntryPoints[el] = ENTRY_POINT_GLOBAL[el];
		});

		Object.keys(ENTRY_POINTS).forEach(el => {
			allEntryPoints[el] = ENTRY_POINTS[el];
		});

		return allEntryPoints;
	}

	function loader(type, query, merge) {
		for (let key in merge) {
			if (merge.hasOwnProperty(key)) {
				query[key] = merge[key];
			}
		}
		return type + '?' + JSON.stringify(query);
	}

	function getCreationDate() {
		return new Date().getFullYear();
	}

	function getBuildDate() {
		var date = new Date();
		return [date.getDate(), (date.getMonth() + 1), date.getFullYear()].join('-');
	}

	function getOSBasedPath(path) {
		if (packageUserInformation.OS && packageUserInformation.OS === 'windows') {
			return path.replace(/\//g, '\\');
		}
		return path;
	}

	function makeConfig() {
		CONFIG = {
			context: getOSBasedPath(__dirname + '/src'),
			entry  : getAllEntryPoints(),
			output : {
				path    : './dist',
				filename: './js/' + HASH_BUNDLE + '.js'
			},
			externals: {},
			module   : {
				noParse: [
				],
				loaders: [
					{
						test   : /\.jsx?$/,
						exclude: /(node_modules)|(vendor)/,
						loader : 'babel',
						query  : {
							presets: ['react', 'es2015']
						}
					},
					{
						test  : /\.(php|html)$/,
						loader: PathRewriterPlugin.rewriteAndEmit({
							name: '[path][name].[ext]'
						})
					},
					{
						test  : /\.css$/,
						loader: loader('file-loader', {
							name: '[name].[ext]'
						})
					},
					{
						test   : /\.*$/,
						include: [
							path.resolve(__dirname + '/src/downloads')
						],
						loader: loader('file-loader', {
							name: '[path][name].[ext]'
						})
					},
					{
						test  : /\.scss$/,
						loader: ExtractTextPlugin.extract('style-loader', [
							'css-loader',
							'autoprefixer-loader?browsers=last 2 version',
							'sass-loader'
						].join('!'), {
							publicPath: '../'
						})
					}, {
						test   : /\.png$/i,
						exclude: [
							path.resolve(__dirname + '/src/img')
						],
						loaders: [
							loader('file-loader', {
								name: '[name].[ext]'
							}),
							loader('image', {
								bypassOnDebug    : true,
								optimizationLevel: 7,
								interlaced       : false
							})
						]
					}, {
						test   : /\.(jpe?g|png|gif|svg)$/i,
						include: [
							path.resolve(__dirname + '/src/img')
						],
						loaders: [
							loader('file-loader', {
								name: 'img/' + HASH_FILE
							}),
							loader('image', {
								bypassOnDebug    : true,
								optimizationLevel: 7,
								interlaced       : false
							})
						]
					}, {
						test  : /\.(woff2?)$/,
						loader: loader('url-loader', {
							limit   : 10000,
							mimetype: 'application/font-woff'
						}, {
							name: 'fonts/' + HASH_FILE
						})
					}, {
						test   : /\.(ttf|eot|svg)$/,
						include: [
							path.resolve(__dirname + '/src/fonts')
						],
						loader: loader('file-loader', {
							name: 'fonts/' + HASH_FILE
						})
					}
				]
			},
			resolve: {
				root: [
					__dirname + '/src/js',
					__dirname + '/vendor/js'
				],
				extensions: ['', '.js'],
				alias     : {}
			},
			plugins: [
				new Webpack.optimize.DedupePlugin(),
				new Webpack.OldWatchingPlugin(),
				new Webpack.DefinePlugin({
					'process.env': {
						'NODE_ENV': '"' + process.env.NODE_ENV + '"'
					},
					'PACKAGE': {
						'NAME'         : '"' + packageInformation.name + '"',
						'DESCRIPTION'  : '"' + packageInformation.description + '"',
						'VERSION'      : '"' + packageInformation.version + '"',
						'AUTHOR'       : '"' + packageInformation.author + '"',
						'CREATION_DATE': '"' + getCreationDate() + '"',
						'BUILD_DATE'   : '"' + getBuildDate() + '"'
					}
				}),

				new PathRewriterPlugin({
					emitStats: false
				}),

				new ExtractTextPlugin('./css/' + HASH_BUNDLE + '.css', {
					allChunks: true
				}),

				new Webpack.optimize.CommonsChunkPlugin({
					name    : 'global',
					chunks  : Object.keys(ENTRY_POINT_GLOBAL),
					filename: './js/' + HASH_BUNDLE + '.js'
				}),

				new Webpack.optimize.CommonsChunkPlugin({
					name    : 'common',
					chunks  : Object.keys(ENTRY_POINTS),
					filename: './js/' + HASH_BUNDLE + '.js'
				}),

				new WebpackOnBuildPlugin(function() {
					ChildProcess.exec('npm run onbuild', function(error, stdout, stderr) {
						if (error !== null) {
							console.log('exec error: ' + error);
							console.log(stderr);
						}
					});
				}),

				function() {
					this.plugin('done', function(stats) {
						require('fs').writeFileSync(
							[__dirname, 'tmp', 'stats.json'].join('/'),
							JSON.stringify(stats.toJson(), null, '\t')
						);
					});
				}
			]
		};
	}

	init();

	return CONFIG;
})();
