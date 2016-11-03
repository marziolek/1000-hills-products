'use strict';

var $ = require('jquery');
var skrollr = require('skrollr');

var hero = function () {
  var $win = $(window), body = $('body'), heroItems, heroItemImg, s, scrollTop = 100;
  var mobileScroll = function() {
    $win.scroll( function() {
      if ($win.scrollTop() > scrollTop) {
        body.addClass('scrolled')
      } else {
        body.removeClass('scrolled')
      }
    });
  };

  $win.on('load', function() {
    heroItems = $('.owl-item');
    heroItemImg = heroItems.find('img');

    $.each(heroItemImg, function(key, el) {
      var $el = $(el), imgUrl = $el.attr('src'), parent = $el.closest('.owl-item > div');
      parent.addClass('owl-item--bg').attr('data-0', 'transform: translate3d(0,0%,0) scale(1)').attr('data-top-bottom', 'transform: translate3d(0,-10%,0) scale(1.2)').css('background-image', 'url(' + imgUrl + ')');
    });

    s = skrollr.init({forceHeight: false});

    if (s.isMobile()) {
      s.destroy();
      mobileScroll();
    }
  });
};

module.exports = hero;
