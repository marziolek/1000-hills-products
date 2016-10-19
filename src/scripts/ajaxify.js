'use strict';

var $ = require('jquery');

var ajaxify = function () {
  var $win = $(window),
      bodybag = $('.bodybag'),
      links = $('a'),
      loader = $('.loader');

  $win.on('load', function() {
    bodybag.removeClass('fade-out');
  });

  links.click( function(e) {
    e.preventDefault();

    loader.addClass('show');

    var $el = $(e.target),
        href = $el.attr('href');

    if (/^#/.test(href) === false) {
      bodybag.addClass('fade-out');

      setTimeout( function() {
        window.location.href = href
      }, 600)
    }
  })
};

module.exports = ajaxify;
