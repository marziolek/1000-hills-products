'use strict';

var $ = require('jquery');

var menuMobile = function () {
  var body = $('body'), menuToggle = $('#nav-toggle');

  menuToggle.click( function() {
    body.toggleClass('menu-open');
    menuToggle.toggleClass('open');
  });
};

module.exports = menuMobile;
