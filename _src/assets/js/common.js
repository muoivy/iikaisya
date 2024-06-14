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
    headerHamburger = $('.js-hamburger'),
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
    $('.l-main').toggleClass('is-active');
    $('html').toggleClass('no-scroll');
  });

  // menu
  $('.l-header_nav .js-anchor').click(function () {
    headerHamburger.toggleClass('is-active');
    headerNav.toggleClass('is-active');
    $('html').toggleClass('no-scroll');
  });


/* Splide
********************************************** */
if ($(".top-mainvisual_image").length > 0) {
  const splide01 = new Splide('.top-mainvisual_image', {
    type: "loop",
    autoWidth: true,
    arrows: false,
    pagination: false,
    drag: false,
    autoScroll: {
      autoStart: true,
      speed: 0.75,
      pauseOnHover: false,
      pauseOnFocus: false,
    }
  }).mount(window.splide.Extensions);
}

if ($(".top-work_img01").length > 0) {
  const splide02 = new Splide('.top-work_img01', {
    type: "loop",
    autoWidth: true,
    arrows: false,
    pagination: false,
    drag: false,
    autoScroll: {
      autoStart: true,
      speed: 0.75,
      pauseOnHover: false,
      pauseOnFocus: false,
    }
  }).mount(window.splide.Extensions);
}

if ($(".top-work_img02").length > 0) {
  const splide03 = new Splide('.top-work_img02', {
    type: "loop",
    autoWidth: true,
    arrows: false,
    pagination: false,
    drag: false,
    autoScroll: {
      autoStart: true,
      speed: -0.75,
      pauseOnHover: false,
      pauseOnFocus: false,
    }
  }).mount(window.splide.Extensions);
}

if ($(".top-story_image").length > 0) {
  const splide03 = new Splide('.top-story_image', {
    type: "loop",
    autoWidth: true,
    arrows: false,
    pagination: false,
    drag: false,
    autoScroll: {
      autoStart: true,
      speed: 0.75,
      pauseOnHover: false,
      pauseOnFocus: false,
    }
  }).mount(window.splide.Extensions);
}

/* Screen
********************************************** */
const fh = window.ontouchstart === null;
const ee = window.matchMedia("(max-width: 767px)").matches;

const screenDirection = () => {
  if ($(".screen").length > 0) {
    const t = document.querySelector(".screen").getBoundingClientRect().height / 3;
    const e = fh || ee;

    gsap.set(".screen__back-image", { scale: 1.2 });

    gsap.to(".screen__wrap--career .screen__back-image", {
      scale: 1,
      ease: "none",
      scrollTrigger: {
        trigger: ".screen",
        start: "top bottom",
        end: `top+=${t + window.innerHeight * 0.8} top`,
        scrub: true
      }
    });

    const i = window.innerHeight;
    // const i = window.innerHeight * 2;
    const n = e ? `bottom top+=${i}` : "bottom bottom";

    ScrollTrigger.create({
      trigger: ".screen",
      start: "top top",
      anticipatePin: 1,
      end: n,
      pin: ".screen__pin-box",
      pinSpacing: false
    });

    if (!e) {
      gsap.set(".screen__wrap--career .screen__back-image-box", { y: "-60vh" });
      gsap.to(".screen__wrap--career .screen__back-image-box", {
        y: "0vh",
        ease: "none",
        scrollTrigger: {
          trigger: ".screen",
          start: "top bottom",
          end: "top top",
          scrub: true
        }
      });
    }
    // let r = gsap.timeline();
    // r.to(".screen__wrap--career", {
    //     startAt: {
    //         opacity: 1
    //     },
    //     duration: 1.5,
    //     opacity: 0,
    //     ease: "none"
    // }, "hide"),

    // ScrollTrigger.create({
    //   trigger: ".screen",
    //   animation: r,
    //   start: `top+=${t} top`,
    //   end: `top+=${t + window.innerHeight * .8} top`,
    //   scrub: !0,
    //   onUpdate: c=>{
    //     document.querySelector(".screen__wrap--career").style.pointerEvents = c.progress > .5 ? "none" : "auto"
    //   }
    // });

    // e || gsap.to(".screen", {
    //   y: `-${window.innerHeight / 5}`,
    //   ease: "none",
    //   scrollTrigger: {
    //     trigger: ".top-history",
    //     start: "top bottom",
    //     end: "top top",
    //     scrub: !0
    //   }
    // });

  }
};

screenDirection()

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


/* TOP STORY
********************************************** */
if ($("#story").length > 0) {
  $(window).scroll(function() {
    var scrollPosition = $(window).scrollTop();
    var storyPosition = $('#story').offset().top - 200;
    var storyHeight = $('#story').outerHeight();

    if (scrollPosition >= storyPosition && scrollPosition < storyPosition + storyHeight) {
        $('#story').addClass('is-active');
    } else {
        $('#story').removeClass('is-active');
    }
  });
}

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
