/* jQuery Pre loader
  -----------------------------------------------*/
jQuery(window).load(function () {
  jQuery(".preloader").fadeOut(1000); // set duration in brackets
});

/* Mobile Navigation
    -----------------------------------------------*/
jQuery(window).scroll(function () {
  if (jQuery(".navbar").offset().top > 50) {
    jQuery(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
    jQuery(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
});

/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
jQuery(document).ready(function () {
  /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
  jQuery(".navbar-collapse a").click(function () {
    jQuery(".navbar-collapse").collapse("hide");
  });

  /* Parallax section
    -----------------------------------------------*/
  function initParallax() {
    jQuery("#intro").parallax("100%", 0.1);
    jQuery("#overview").parallax("100%", 0.3);
    jQuery("#detail").parallax("100%", 0.2);
    jQuery("#video").parallax("100%", 0.3);
    jQuery("#speakers").parallax("100%", 0.1);
    jQuery("#program").parallax("100%", 0.2);
    jQuery("#register").parallax("100%", 0.1);
    jQuery("#faq").parallax("100%", 0.3);
    jQuery("#venue").parallax("100%", 0.1);
    jQuery("#sponsors").parallax("100%", 0.3);
    jQuery("#contact").parallax("100%", 0.2);
  }
  initParallax();

  /* Owl Carousel
  -----------------------------------------------*/
  jQuery(document).ready(function () {
    jQuery("#owl-speakers").owlCarousel({
      autoPlay: 6000,
      items: 4,
      itemsDesktop: [1199, 2],
      itemsDesktopSmall: [979, 1],
      itemsTablet: [768, 1],
      itemsTabletSmall: [985, 2],
      itemsMobile: [479, 1],
    });
  });

  /* Back top
  -----------------------------------------------*/
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 200) {
      jQuery(".go-top").fadeIn(200);
    } else {
      jQuery(".go-top").fadeOut(200);
    }
  });
  // Animate the scroll to top
  jQuery(".go-top").click(function (event) {
    event.preventDefault();
    jQuery("html, body").animate({ scrollTop: 0 }, 300);
  });

  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();
});
