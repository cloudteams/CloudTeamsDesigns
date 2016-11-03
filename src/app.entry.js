/* GLOBAL JS */
import 'babel-polyfill';
import 'jquery';
import 'bootstrap';
import 'cookieconsent';
import './js/Main';
import './js/CookieConsent';

/* PHP & HTML */
require.context('./', true, /\.(php|html)$/);

/* SASS */
require('./sass/style.scss');

