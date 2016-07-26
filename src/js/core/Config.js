/* global $, PACKAGE */

export default (function() {
	const CONFIG = {
		APP: {
			NAME         : PACKAGE.DESCRIPTION,
			VERSION      : PACKAGE.VERSION,
			AUTHOR       : PACKAGE.AUTHOR,
			CREATION_DATE: PACKAGE.CREATION_DATE,
			BUILD_DATE   : PACKAGE.BUILD_DATE,
			DEBUG        : process.env.NODE_ENV !== 'production'
		},
		UI: {
			MODAL_FADE_DURATION  : 0.25,
			OVERLAY_FADE_DURATION: 0.25
		}
	};

	console.log(`${CONFIG.APP.NAME} ${CONFIG.APP.VERSION}, ©${CONFIG.APP.CREATION_DATE} ${CONFIG.APP.AUTHOR} ${CONFIG.APP.DEBUG ? `— built on ${CONFIG.APP.BUILD_DATE}` : ''}`);

	return CONFIG;
})();
