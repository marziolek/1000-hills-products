/*
  Project: 1000 Hills Products
  Author: Marcin Ziółek
 */

require('../../vendor/greensock-js/src/minified/TweenMax.min.js');
var loader = require('./loader.js');
var ajaxify = require('./ajaxify.js');
var hero = require('./hero.js');
//var mouseMove = require('./mouse-move.js');

loader();
ajaxify();
hero();
//mouseMove();
