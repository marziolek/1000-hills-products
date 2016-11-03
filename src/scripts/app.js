/*
  Project: 1000 Hills Products
  Author: Marcin Ziółek
 */
require('gsap/src/uncompressed/TweenMax');

var loader = require('./loader.js');
var ajaxify = require('./ajaxify.js');
var hero = require('./hero.js');
var menuToggle = require('./menu-toggle.js');

loader();
ajaxify();
hero();
menuToggle();
