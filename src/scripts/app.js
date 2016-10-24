/*
  Project: 1000 Hills Products
  Author: Marcin Ziółek
 */
require('gsap/src/uncompressed/TweenMax');

var loader = require('./loader.js');
var ajaxify = require('./ajaxify.js');
var hero = require('./hero.js');

loader();
ajaxify();
hero();
