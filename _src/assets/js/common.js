/* Variable
********************************************** */
  var breakpointWidth = 768;
  // var headerHeight = $('.l-header').innerHeight();
  var headerHeight = 100;

/* Document Ready
********************************************** */
  $(document).ready(function() {

  });

  $( window ).on( "resize", function() {
    setVW();
  });

  setVW();

/* Loading
********************************************** */
  $(document).ready(function() {
    inview();
    // if ($(".js-loading").length > 0) {
    //   var e = $(".js-loading")
    //   setTimeout(function() {
    //     e.addClass("is-active")
    //   }, 400),
    //   setTimeout(function() {
    //     inview();
    //   }, 4000)
    // } else {
    //   inview();
    // }
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


  /* FOOTER BUTTON
********************************************** */
$('.sec-recruit_btn').on( "mouseenter", function() {
  $('.sec-recruit_image').addClass('is-zoom');
})
.on( "mouseleave", function() {
  $('.sec-recruit_image').removeClass('is-zoom');
});

/* TOP INTERVIEW SLIDER
********************************************** */
const swiper = new Swiper('.top-interview_slider', {
  // Optional parameters
  slidesPerView: 'auto',
  autoplay: true,
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.top-interview_slider_next',
    prevEl: '.top-interview_slider_prev',
  },

});

/* BUSINESS MODAL
********************************************** */
$('.business-content_btn a').on('click', function(e) {
  e.preventDefault();
  var modalId = $(this).attr('href');
  $(modalId).addClass('is-acitve');
});

$('.modal-btn, .modal-overlay').on('click', function() {
  $(this).closest('.business-content_modal').removeClass('is-acitve'); // Close the modal
});

/* INTERVIEW
********************************************** */
$('.interview-content_item .c-btn').hover(
  function() {
    $(this).closest('.interview-content_item').find('.item-image').addClass('is-active');
  },
  function() {
    $(this).closest('.interview-content_item').find('.item-image').removeClass('is-active');
  }
);


if ($(".interview-gallery_slider").length > 0) {
  var main = new Splide( '.interview-gallery_main', {
    type      : 'fade',
    rewind    : true,
    pagination: false,
    arrows    : false,
  } );

  var thumbnails = new Splide( '.interview-gallery_thumbnail', {
    rewind      : true,
    pagination  : false,
    isNavigation: true,
    perPage: 5,
    gap: 15
  } );

  main.sync( thumbnails );
  main.mount();
  thumbnails.mount({
    SlideNumber
  });
}

function SlideNumber( Splide, Components ) {
  const { track } = Components.Elements;

  let elm;

  function mount() {
    elm = document.createElement( 'div' );
    elm.className = "splide__number";

    track.parentElement.insertBefore( elm, track.nextSibling );

    update();
    Splide.on( 'move', update );
  }

  function update() {
    elm.textContent = `${ Splide.index + 1 }/${ Splide.length }`;
  }

  return {
    mount,
  };
}


/* Function to wrap each character in spans
********************************************** */
function wrapCharactersInSpans(text) {
  var wrappedText = '';
  for (var i = 0; i < text.length; i++) {
    if (text[i] === ' ') {
      wrappedText += '<span class="txt-space">' + text[i] + '</span>';
    } else if (text[i] === '-') {
      wrappedText += '<span class="txt-chars txt-font01">' + text[i] + '</span>';
    } else {
      wrappedText += '<span class="txt-chars">' + text[i] + '</span>';
    }
  }
  return wrappedText;
}

// Apply the function to the target elements
$('.js-letter').each(function() {
  var text = $(this).text();
  var wrappedText = wrapCharactersInSpans(text);
  $(this).html(wrappedText);
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
