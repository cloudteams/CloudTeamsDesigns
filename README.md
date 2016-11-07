# CloudTeams

## Development

1. Add file `webpack.config.user.json`

	```json
	{
		"output": "absolute/path/to/output/folder/",
		"preview_url"  : "localhost",
		"preview_port" : 3000 
	}
	```

2. Install node modules

	`npm install`

3. (a) Working with project 

	`npm run watch`

3. (b) For working with a browser sync / livereload (make sure to provide preview_url and preview_port)

	`npm run watch-live`

3. (c) For production build

	`npm run production`
