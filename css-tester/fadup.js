$(function() {

  $(window).scroll(function() {
    var scrollZone = $('#scrollPast').outerHeight() - 80;
    var windowTop = $(window).scrollTop();

  });

  $(window).scroll(function() {
    var textScroll = 60;
    var windowTop = $(window).scrollTop();

    if (textScroll < windowTop) {
      $('#fade-up').addClass('moveRemove');
      $('#fade-up').removeClass('moveAdd');
    }
    if ((textScroll > windowTop) && (!$('#fade-up').hasClass(''))) {
      $('#fade-up').addClass('moveAdd');
      $('#fade-up').removeClass('moveRemove');
    }
  });

});
