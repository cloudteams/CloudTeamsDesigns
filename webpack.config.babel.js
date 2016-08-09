module.exports = (function() {

	const AutoPrefixer         = require('autoprefixer');
	const Webpack              = require('webpack');
	const WebpackOnBuildPlugin = require('on-build-webpack');
	const ExtractTextPlugin    = require('extract-text-webpack-plugin');
	const PathRewriterPlugin   = require('webpack-path-rewriter');
	const ChildProcess         = require('child_process');
	const Path                 = require('path');
	const BrowserSyncPlugin    = require('browser-sync-webpack-plugin');

	// const CopyWebpackPlugin    = require('copy-webpack-plugin');
	// const PurifyPlugin         = require('purifycss-webpack-plugin');
	const packageInformation   = require('./package.json');
	const packageUserInformation   = require('./package.user.json');

	const PRODUCTION  = process.env.NODE_ENV === 'production';
	const HASH_FILE   = PRODUCTION ? '[hash:8].[ext]' : '[name]-[hash:8].[ext]';
	const HASH_BUNDLE = PRODUCTION ? '[name]-[chunkhash:8]' : '[name]-dev';

	const LIVE_RELOAD = process.env.LIVE_RELOAD === 'true'; // change to false when not using BrowserSyncPlugin

	const ENTRY_POINT_GLOBAL = {
		'global': './app.entry.js'
	};

	const ENTRY_POINTS = {
		'developer/dashboard/projects'         : './js/developer/dashboard/Projects.js',
		'developer/dashboard/customer-ideas'   : './js/developer/dashboard/CustomerIdeas.js',
		'developer/dashboard/messages'         : './js/developer/dashboard/Messages.js',
		'developer/dashboard/campaign-overview': './js/developer/dashboard/CampaignOverview.js',
		'developer/dashboard/team'             : './js/developer/dashboard/Team.js',
		'user/dashboard/projects'              : './js/user/dashboard/Projects.js',
		'public/project'                       : './js/public/Project.js',
		'shared/loaders'                       : './js/shared/Loaders.js'
	};

	function getAllEntryPoints() {
		const allEntryPoints = {};

		Object.keys(ENTRY_POINT_GLOBAL).forEach(key => {
			allEntryPoints[key] = ENTRY_POINT_GLOBAL[key];
		});

		Object.keys(ENTRY_POINTS).forEach(key => {
			allEntryPoints[key] = ENTRY_POINTS[key];
		});

		return allEntryPoints;
	}

	function loader(type, query, merge) {
		if (merge) {
			Object.keys(merge).forEach(key => {
				query[key] = merge[key];
			});
		}

		return type + '?' + JSON.stringify(query);
	}

	function getCreationDate() {
		return new Date().getFullYear();
	}

	function getBuildDate() {
		const date = new Date();

		return [date.getDate(), (date.getMonth() + 1), date.getFullYear()].join('-');
	}

	function getOSBasedPath(path) {
		if (packageUserInformation.OS && packageUserInformation.OS === 'windows') {
			return path.replace(/\//g, '\\');
		}

		return path;
	}

	function getPlugins() {
		const result = [

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

			new PathRewriterPlugin({
				emitStats: false
			}),

			new WebpackOnBuildPlugin(() => {
				ChildProcess.exec('npm run onbuild');
			})
		];

		if (LIVE_RELOAD) {
			result.push(
				new BrowserSyncPlugin(
					{
						host : 'localhost',
						port : 3000,
						proxy: 'http://localhost:80/'
					},
					{
						reload: true
					}
				)
			);
		}

		result.push(
			function() {
				this.plugin('done', stats => {
					require('fs').writeFileSync(
						[__dirname, 'tmp', 'stats.json'].join('/'),
						JSON.stringify(stats.toJson(), null, '\t')
					);
				});
			}
		);

		return result;
	}

	function makeConfig() {
		return {
			context: getOSBasedPath(__dirname + '/src'),
			entry  : getAllEntryPoints(),
			output : {
				path    : './dist',
				filename: './js/' + HASH_BUNDLE + '.js'
				// publicPath: '/'
			},
			externals: {},
			postcss  : [
				new AutoPrefixer({
					browsers: ['last 2 versions']
				})
			],
			module: {
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
						test  : /\.scss$/,
						loader: ExtractTextPlugin.extract('style-loader', [
							'css-loader',
							'postcss-loader',
							'sass-loader'
						].join('!'), {
							publicPath: '../'
						})
					},
					{
						test   : /\.(jpe?g|png|gif|svg)$/i,
						include: [
							Path.resolve(__dirname + '/src/img')
						],
						loaders: [
							loader('file-loader', {
								name: './img/' + HASH_FILE
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
						exclude: [
							Path.resolve(__dirname + '/src/img')
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

			plugins: getPlugins(),

		};
	}

	return makeConfig();
})();
