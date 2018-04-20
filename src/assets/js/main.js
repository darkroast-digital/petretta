$(document).ready(function() {

  var userFeed = new Instafeed({
    get: 'user',
    userId: '3619221470',
    accessToken: '3619221470.1677ed0.44348d21dbbf4aa78555c8d955383e02',
    // userId: 6678174,
    // accessToken: '6678174.dcb4dc5.22dfed692290436f9737ffcb9938b819',
    resolution: 'standard_resolution',
    limit: 6,
    template: '<a href="{{link}}" target="_blank" class="post"><span class="user"><img src="https://scontent-yyz1-1.cdninstagram.com/vp/80d42739f1546e6508aca45aa7d693da/5B533F09/t51.2885-19/s150x150/17587224_574604849403594_6769852869295210496_a.jpg" draggable="false" />Petretta Construction</span><img src="{{image}}" /><i><span class="caption">{{caption}}</span><span class="likes">{{likes}} likes</span></i></a>',
  });

  userFeed.run();

  var menuTrigger = $('.sidebar-trigger');
  var menuTriggerPosition = $('.sidebar-trigger').position();
  var nav = $('.sidebar-nav');
  var navWidth = nav.outerWidth();

  if (!nav.hasClass('is--active')) {
      menuTrigger.click(function() {
        nav.toggleClass('is--active');
      });
  } else {
    $('body').click(function() {
        nav.removeClass('is--active');
      });
  }

  nav.css({'top' : menuTriggerPosition.top});

  $('.hero-slider').slick({
    dots: true,
    arrows: false,
    vertical: true,
    autoplay: true,
    speed: 1000,
    pauseOnHover: false
  });

  $('.slick-dots button').empty();

  //FORM =======================================

  var form = $('#form');
var formMessages = $('.form-messages');

$(form).submit(function (event) {
      event.preventDefault();
      //grab all form data
      var formData = new FormData($(this)[0]);

      $.ajax({
          url: $(form).attr('action'),
          type: 'POST',
          data: formData,
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function (returndata) {
              $(formMessages).html('Thanks for your interest in working at Petretta Construction  We\'ll be in touch soon!');

              $(formMessages).removeClass('error');
              $(formMessages).addClass('success');

              $('#careers-form input').val('');
              $('#careers-form textarea').val('');
          },
          error: function () {
              $(formMessages).html('Oh no!  Something went wrong, give it a try agian.');

              $(formMessages).removeClass('success');
              $(formMessages).addClass('error');

              $('#careers-form input').val('');
              $('#careers-form textarea').val('');
          }
      });

      return false;
  });

var careersForm = $('#careers-form');

$(careersForm).submit(function (event) {
      event.preventDefault();
      //grab all form data
      var formData = new FormData($(this)[0]);

      $.ajax({
          url: $(careersForm).attr('action'),
          type: 'POST',
          data: formData,
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function (returndata) {
              $(formMessages).html('Thanks for your interest in working at Petretta Construction  We\'ll be in touch soon!');

              $(formMessages).removeClass('error');
              $(formMessages).addClass('success');

              $('#careers-form input').val('');
              $('#careers-form textarea').val('');
          },
          error: function () {
              $(formMessages).html('Oh no!  Something went wrong, give it a try agian.');

              $(formMessages).removeClass('success');
              $(formMessages).addClass('error');

              $('#careers-form input').val('');
              $('#careers-form textarea').val('');
          }
      });

      return false;
  });

var modal = $('.modal');
var modalTrigger = $('.modal-trigger ');
var modalClose = $('.modal-close');
var modalBG = $('.modal-background');

modalTrigger.click(function() {
  modal.addClass('is--active');
});

modalClose.click(function() {
  modal.removeClass('is--active');
});

modalBG.click(function() {
  modal.removeClass('is--active');
});

//
//
// Prject Lightbox
//
//

var image = $('.project-image');
var imageOneSrc = image.first().attr('src');
var lightbox = $('.lightbox');
var lightboxOverlay = $('.lightbox-background');
var lightboxClose = $('.lightbox-close');
var lightboxImage = lightbox.find('img');
var next = $('.lightbox-next');
var prev = $('.lightbox-prev');

image.first().addClass('is--active');

var currentImage = $('.project-image.is--active');

lightboxImage.attr('src', imageOneSrc);

image.click(function () {
  var thisSrc = $(this).attr('src');
  $('.project-image.is--active').removeClass('is--active');
  $(this).addClass('is--active');
  lightboxImage.attr('src', thisSrc);

  lightbox.addClass('is--active');
});

next.click(function () {
  $('.project-image.is--active').parent().next().find('.project-image').addClass('is--active');
  $('.project-image.is--active').first().removeClass('is--active');
  var activeSrc = $('.project-image.is--active').attr('src');

  lightboxImage.attr('src', activeSrc);
});

prev.click(function () {
  $('.project-image.is--active').parent().prev().find('.project-image').addClass('is--active');
  $('.project-image.is--active').last().removeClass('is--active');
  var activeSrc = $('.project-image.is--active').attr('src');

  lightboxImage.attr('src', activeSrc);
});

lightboxClose.click(function () {
  lightbox.removeClass('is--active');
});

lightboxOverlay.click(function () {
  lightbox.removeClass('is--active');
});

});
