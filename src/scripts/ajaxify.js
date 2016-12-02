'use strict';

var $ = require('jquery');

var ajaxify = function () {
  var bodybag = $('.bodybag'), links = $('a:not(.extras)'), loader = $('.loader:not(.loader-home)'), timeout = 600;

  links.click( function(e) {
    e.preventDefault();

    loader.addClass('show');

    var $el = $(this), href = $el.attr('href');

    if (/^#/.test(href) === false) {
      bodybag.addClass('fade-out');

      setTimeout( function() {
        window.location.href = href
      }, timeout)
    }
  })
};

module.exports = ajaxify;
