const BrowserSyncPlugin     = require('browser-sync-webpack-plugin');
const ChildProcess          = require('child_process');
const ExtractTextPlugin     = require('extract-text-webpack-plugin');
const packageInformation    = require('./package.json');
const Path                  = require('path');
const PathRewriterPlugin    = require('webpack-path-rewriter');
const Webpack               = require('webpack');
const WebpackUserConfig     = require('./webpack.config.user.json');

module.exports = (function() {
	const PRODUCTION  = process.env.NODE_ENV === 'production';
	const LIVE_RELOAD = process.env.LIVE_RELOAD === 'true';

	const HASH_FILE   = PRODUCTION ? '[hash:8].[ext]' : '[name]-[hash:8].[ext]';
	const HASH_BUNDLE = PRODUCTION ? '[name]-[chunkhash:8]' : '[name]-dev';

	const ENTRY_POINTS = {
		'common'                               : './app.entry.js',
		'developer/dashboard/projects'         : './js/developer/dashboard/Projects.js',
		'developer/dashboard/customer-ideas'   : './js/developer/dashboard/CustomerIdeas.js',
		'developer/dashboard/cloudcoins'       : './js/developer/dashboard/Cloudcoins.js',
		'developer/dashboard/messages'         : './js/developer/dashboard/Messages.js',
		'developer/dashboard/campaign-overview': './js/developer/dashboard/CampaignOverview.js',
		'developer/dashboard/campaign-create'  : './js/developer/dashboard/CampaignCreate.js',
		'developer/dashboard/team'             : './js/developer/dashboard/Team.js',
		'developer/dashboard/personas'         : './js/developer/dashboard/Personas.js',
		'developer/dashboard/rewards'          : './js/developer/dashboard/Rewards.js',
		'developer/dashboard/documents'        : './js/developer/dashboard/Documents.js',
		'developer/dashboard/notifications'    : './js/developer/dashboard/Notifications.js',
		'developer/dashboard/activities'       : './js/developer/dashboard/Activities.js',
		'user/dashboard/projects'              : './js/user/dashboard/Projects.js',
		'public/project'                       : './js/public/Project.js',
		'shared/loaders'                       : './js/shared/Loaders.js'
	};

	function getBuildDate() {
		const date = new Date();

		return [date.getDate(), (date.getMonth() + 1), date.getFullYear()].join('-');
	}

	function getPlugins() {
		const result = [
			new Webpack.ProvidePlugin({
				'$'            : 'jquery',
				'jQuery'       : 'jquery',
				'window.jQuery': 'jquery',
				'window.Tether': 'tether'
			}),

			new Webpack.DefinePlugin({
				'process.env': {
					'NODE_ENV': `"${process.env.NODE_ENV}"`
				},
				'PACKAGE': {
					'NAME'         : `"${packageInformation.name}"`,
					'DESCRIPTION'  : `"${packageInformation.description}"`,
					'VERSION'      : `"${packageInformation.version}"`,
					'AUTHOR'       : `"${packageInformation.author}"`,
					'CREATION_DATE': `"${new Date().getFullYear()}"`,
					'BUILD_DATE'   : `"${getBuildDate()}"`
				}
			}),

			new ExtractTextPlugin({
				filename : `css/${HASH_BUNDLE}.css`,
				allChunks: true
			}),

			new Webpack.optimize.CommonsChunkPlugin({
				name     : 'common',
				minChunks: 2,
				filename : Path.join('js', `${HASH_BUNDLE}.js`)
			}),

			new PathRewriterPlugin({
				emitStats: false
			})
		];

		if (LIVE_RELOAD) {
			result.push(
				new BrowserSyncPlugin(
					{
						host : 'localhost',
						port : 3000,
						proxy: 'http://localhost:8080/'
					},
					{
						reload: true
					}
				)
			);
		}

		return result;
	}

	function makeConfig() {
		if (!(WebpackUserConfig && WebpackUserConfig.output)) {
			throw new Error('please define output folder in "webpack.config.user.json"');
		}

		return {
			context: Path.join(__dirname, 'src'),
			entry  : ENTRY_POINTS,
			output : {
				path    : WebpackUserConfig.output,
				filename: `js/${HASH_BUNDLE}.js`
			},
			module: {
				rules: [
					{
						test   : /\.jsx?$/,
						exclude: /(node_modules)|(vendor)/,
						loader : 'babel',
						options: {
							presets: ['es2015']
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
						loader: ExtractTextPlugin.extract({
							fallbackLoader: 'style',
							publicPath    : '../',
							loader        : [
								{
									loader : 'css',
									options: {
										importLoaders: 1
									}
								},
								'postcss',
								'sass'
							]
						})
					},
					{
						test   : /\.(jpe?g|png|gif|svg)$/i,
						include: [
							Path.resolve(`${__dirname}/src/img`)
						],
						use: [
							{
								loader : 'file',
								options: {
									name: `img/${HASH_FILE}`
								}
							},
							{
								loader : 'image-webpack',
								options: {
									bypassOnDebug    : true,
									optimizationLevel: 7,
									interlaced       : false
								}
							}
						]
					}, {
						test   : /\.(woff2?)$/,
						loader : 'url',
						options: {
							limit   : 10000,
							mimetype: 'application/font-woff',
							name    : `fonts/${HASH_FILE}`
						}
					}, {
						test   : /\.(ttf|eot|svg)$/,
						exclude: [
							Path.resolve(`${__dirname}/src/img`)
						],
						loader : 'file',
						options: {
							name: `fonts/${HASH_FILE}`
						}
					}
				]
			},
			resolve: {
				modules: [
					Path.join(__dirname, 'src', 'js'),
					Path.join(__dirname, 'vendor', 'js'),
					Path.join(__dirname, 'node_modules')
				],
				extensions: ['.js', '.scss'],
				alias     : {}
			},

			plugins: getPlugins()

		};
	}

	ChildProcess.exec(`rimraf ${WebpackUserConfig.output}`);

	return makeConfig();
})();
