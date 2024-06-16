/* Variable
********************************************** */
  var breakpointWidth = 768;
  // var headerHeight = $('.l-header').innerHeight();
  var headerHeight = 100;

/* Document Ready
********************************************** */
  $(document).ready(function() {
    console.log('muoivy');
  });

  $( window ).on( "resize", function() {
    setVW();
  });

  setVW();

/* Loading
********************************************** */
  $(document).ready(function() {
    if ($(".js-loading").length > 0) {
      var e = $(".js-loading")
      setTimeout(function() {
        e.addClass("is-active")
      }, 400),
      setTimeout(function() {
        inview();
      }, 4000)
    } else {
      inview();
    }
  });

/* SET VW
********************************************** */
  function setVW() {
    const t = document.body.clientWidth;
    document.documentElement.style.setProperty("--vw", t + "px");
  }

  const setVh = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  };

  window.addEventListener('load', setVh);
  window.addEventListener('resize', setVh);

/* Inline SVG
********************************************** */
  const convertImages = (query, callback) => {
    const images = document.querySelectorAll(query);

    images.forEach(image => {
      fetch(image.src)
      .then(res => res.text())
      .then(data => {
        const parser = new DOMParser();
        const svg = parser.parseFromString(data, 'image/svg+xml').querySelector('svg');

        if (image.id) svg.id = image.id;
        if (image.className) svg.classList = image.classList;

        image.parentNode.replaceChild(svg, image);
      })
      .then(callback)
      .catch(error => console.error(error))
    });
  }

  convertImages('.js-svg');

/* Anchor Link
********************************************** */
  $("a.js-anchor[href^=\\#]", null).click(function () {
    var speed = 1000;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHeight;

    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  var smoothScrollParam = {
    location: location.pathname,
    init: function () {
      var me = this;

      if (!this.location.match("/admin/")) {
        if (location.search.match("anc=")) {
          me.anchor = location.search.split("anc=")[1];
        } else {
          me.anchor = location.search.split(/\?/)[1];
        }
        var hashP = "#" + this.anchor;

        $("html, body").animate({
          scrollTop: $(hashP).offset().top
        }, 700, "swing");
      }
    },
  };

  if (location.href.match(/\?/)) {
    setTimeout(function () {
      smoothScrollParam.init();
    }, 100);
  }

/* Header
********************************************** */
  var header = $('.l-header'),
    headerHamburger = $('.l-header_hamburger'),
    headerNav = $('.l-header_nav');

  // Header Scroll
  $(window).scroll(function() {
    if ($(window).scrollTop() > 50) {
      header.addClass('is-fixed');
    } else {
      header.removeClass('is-fixed');
    }
  });

  // Hamburger
  headerHamburger.click(function () {
    $(this).toggleClass('is-active');
    headerNav.toggleClass('is-active');
    $('.l-header_overlay').toggleClass('is-active');
    $('.nav-content').toggleClass('is-active');
    $('html').toggleClass('no-scroll');
  });

  // menu
  $('.l-header_nav .js-anchor').click(function () {
    headerHamburger.toggleClass('is-active');
    headerNav.toggleClass('is-active');
    $('.l-header_overlay').toggleClass('is-active');
    $('.nav-content').toggleClass('is-active');
    $('html').toggleClass('no-scroll');
  });



/* INVIEW
********************************************** */
function inview() {
  var offset = 0.95,
    FADE = 'is-inview';

  init();

  function init() {
    $('.inview').each(function () {
      var $el = $(this);

      if ($el.data('offset')) {
        offset = $el.data('offset');
      }

      if ($el.data('transform-custom')) {
        $el.css({
          transform: $el.data('transform-custom'),
        })
      }

      $('[data-transition-delay]').each(function () {
        $(this).css({
          'transition-delay': $(this).data('transition-delay') + 's',
        })
      });

      checkReset($el, offset);
      checkPos($el, offset, FADE);
      addClass($el, offset, FADE);

    });
  }

  function checkReset($elm, $offset) {
    $(window).on('load', function () {
      if (
        $(window).scrollTop() > $elm.offset().top + $elm.outerHeight() ||
        $(window).scrollTop() < $elm.offset().top - $(window).height() * $offset
      ) {
        if ($elm.data('reset')) {
          $elm.css({
            'transition-delay': $elm.data('reset') + 's',
          })
        }
      }
    })
  }

  function addClass($elm, $offset, CLASS) {
    $(window).on('load scroll resize', function () {
      checkPos($elm, $offset, CLASS);
    })
  }

  function checkPos($elm, $offset, CLASS) {
    if (
      $(window).scrollTop() >= Math.floor($elm.offset().top - $(window).height() * $offset) &&
      $(window).scrollTop() <= Math.floor($elm.offset().top + $elm.outerHeight() - $(window).height() * (1 - $offset)) &&
      !$elm.hasClass(CLASS)) {
      setTimeout(function () {
        $elm.addClass(CLASS)
      }, 300)
    }
  }
}
