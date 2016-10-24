'use strict';

var $ = require('jquery');

var loader = function () {
  var $win = $(window), bodybag = $('.bodybag'), loader = $('.loader:not(.loader-home)'), loaderHome = $('.loader-home'), imgOutside = document.getElementsByClassName('loader-home-logo--outside'), loaded = false, tween, imgOutsideScaleTime = 0.4, imgOutsideRotateTime = 5;

  function onRepeat() {
    if (loaded) {
      TweenMax.to(imgOutside, imgOutsideScaleTime, {scale: 0.5, transformOrigin: '50% 50%', ease: Back.easeInOut, onComplete: onComplete })
    }
  }

  function onComplete() {
    loaderHome.removeClass('show');
    bodybag.removeClass('fade-out');
    tween.kill();
  }

  tween = TweenMax.to(imgOutside, imgOutsideRotateTime, {rotation: 360, repeat: -1, transformOrigin: '50% 50%', ease: Power2.easeInOut, onRepeat: onRepeat});

  $win.on('load', function() {
    if (loaderHome.length) {
      loaded = true;
    } else {
      loader.removeClass('show');
      bodybag.removeClass('fade-out');
    }
  });
};

module.exports = loader;
