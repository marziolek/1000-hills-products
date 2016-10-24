'use strict';

var $ = require('jquery');

var mouseMove = function() {
  var $win = $(window), $body = $('body'), movementStrength = 20, height = movementStrength / $win.height(), width = movementStrength / $win.width();

  $win.on('load', function() {
    $body.mousemove(function(e){
      var pageX = e.pageX - ($win.width() / 2), pageY = e.pageY - ($win.height() / 2), newvalueX = width * pageX * -1 - 25, newvalueY = height * pageY * -1 - 50;
      
      //$('.owl-item').css('background-position', newvalueX + 'px ' + newvalueY + 'px');
    });
  });
}

module.exports = mouseMove;
