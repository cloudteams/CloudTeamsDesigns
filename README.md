# CloudTeams

## Development

1. Add file package.user.json

	```json
	{
		"sync-dir": "path/to/sync_folder/",
		"OS"      : "mac|windows"
	}
	```

2. Install node modules

	`npm install`

3. Working with project

	`npm run watch`

4. Change webpack.config.babel.js BrowserSyncPlugin for livereload

	```javascript
	new BrowserSyncPlugin(
		{
			host : 'localhost', 
			port : 3000,
			proxy: 'http://localhost:80/'
		},
		{
			reload: true
		}
	),
	```
