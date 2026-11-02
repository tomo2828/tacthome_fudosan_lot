$(function () {
  var nav = $('nav');
  var fixnav = $('#fix_nav');
  var navH = nav.outerHeight() || 0;
  var navTop = 0;

  function updateNav() {
    navH = nav.outerHeight() || 0;
    $('main').css('padding-top', navH);
    if (nav.length) {
      navTop = nav.offset().top;
      updateScroll();
    }
  }

  function updateScroll() {
    fixnav.toggleClass('scroll', $(window).scrollTop() > navTop + 50);
  }

  function hashTarget(hash) {
    if (!hash || hash === '#') return $('html');
    try {
      return $(document.getElementById(decodeURIComponent(hash.slice(1))));
    } catch (error) {
      return $();
    }
  }

  $(window).on('load resize', updateNav);
  if (nav.length) $(window).on('scroll', updateScroll);
  updateNav();

  if (location.hash) {
    var initialTarget = hashTarget(location.hash);
    if (initialTarget.length) {
      $(window).on('load', function () {
        $('html, body').scrollTop(initialTarget.offset().top - navH);
      });
    }
  }

  $('a[href^="#"]').on('click', function (event) {
    var target = hashTarget(this.hash);
    if (!target.length) return;
    event.preventDefault();
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    $('html, body').stop().animate({ scrollTop: target.offset().top - navH }, reduceMotion ? 0 : 500);
  });

  $('.color_slider').each(function () {
    var slider = $(this);
    var slides = slider.find('.color_slide');
    var track = slider.find('.color_slider_track');
    var dots = slider.find('.color_slider_dots button');
    var current = 0;
    var animating = false;
    var transitionTimer = null;
    var touchStart = null;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    slides.prop('hidden', false).attr('aria-hidden', 'true').eq(0).attr('aria-hidden', 'false');
    track.prepend(slides.last().clone().attr('aria-hidden', 'true'));
    track.append(slides.first().clone().attr('aria-hidden', 'true'));
    track.css({ transition: 'none', transform: 'translateX(-100%)' });

    function finishSlide() {
      window.clearTimeout(transitionTimer);
      track.css({ transition: 'none', transform: 'translateX(' + (-(current + 1) * 100) + '%)' });
      animating = false;
    }

    function showSlide(index) {
      if (animating || index === current) return;
      current = (index + slides.length) % slides.length;
      slides.attr('aria-hidden', 'true').eq(current).attr('aria-hidden', 'false');
      dots.attr('aria-pressed', 'false').eq(current).attr('aria-pressed', 'true');
      slider.find('.color_slider_status').text((current + 1) + ' / ' + slides.length);
      if (reduceMotion.matches) {
        finishSlide();
        return;
      }
      animating = true;
      track.css({ transition: 'transform 500ms ease', transform: 'translateX(' + (-(index + 1) * 100) + '%)' });
      transitionTimer = window.setTimeout(finishSlide, 550);
    }

    track.on('transitionend', function (event) {
      if (event.target === track[0] && /transform$/.test(event.originalEvent.propertyName)) finishSlide();
    });

    slider.find('.color_slider_prev').on('click', function () { showSlide(current - 1); });
    slider.find('.color_slider_next').on('click', function () { showSlide(current + 1); });
    dots.on('click', function () { showSlide(dots.index(this)); });
    slider.on('keydown', function (event) {
      if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
        event.preventDefault();
        showSlide(current + (event.key === 'ArrowRight' ? 1 : -1));
      }
    });
    slider.find('.color_slider_stage').on('touchstart', function (event) {
      var touch = event.originalEvent.touches[0];
      touchStart = { x: touch.clientX, y: touch.clientY };
    }).on('touchend', function (event) {
      if (!touchStart) return;
      var touch = event.originalEvent.changedTouches[0];
      var dx = touch.clientX - touchStart.x;
      var dy = touch.clientY - touchStart.y;
      if (Math.abs(dx) > 40 && Math.abs(dx) > Math.abs(dy)) showSlide(current + (dx < 0 ? 1 : -1));
      touchStart = null;
    }).on('touchcancel', function () { touchStart = null; });
  });
});
