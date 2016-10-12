/* GLOBAL JS */
import 'babel-polyfill';
import 'jquery';
import 'bootstrap';
import './js/Main';

/* PHP & HTML */
require.context('./', true, /\.(php|html)$/);

/* SASS */
require('./sass/style.scss');

