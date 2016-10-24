'use strict';

var $ = require('jquery');

var hero = function () {
  var $win = $(window), heroItems, heroItemImg;

  $win.on('load', function() {
    heroItems = $('.owl-item');
    heroItemImg = heroItems.find('img');

    $.each(heroItemImg, function(key, el) {
      var $el = $(el), imgUrl = $el.attr('src');
      $el.closest('.owl-item > div').css('background-image', 'url(' + imgUrl + ')');
    })
  });

  $win.on('scroll', function() {
  });
};

module.exports = hero;
