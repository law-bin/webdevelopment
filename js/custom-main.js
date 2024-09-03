
$( document ).ready(function() {

              // Menu-on-hover-area-start //
              $('body').on('mouseenter mouseleave', '.nav-item', function (e) {
                if ($(window).width() > 750) {
                    var _d = $(e.target).closest('.nav-item');
                    _d.addClass('show');
                    setTimeout(function () {
                        _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                    }, 1);
                }
            });

         // Menu-on-hover-area-end //

         // Dropdown-area-start //
            $('.dropdown-menu a.dropdown-toggle').click(function (e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');
    
    
                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });
                return false;
            });
        // Dropdown-area-end //

        // sticky-header-area-start //
$(window).scroll(function () {
  if ($(this).scrollTop() > 1) {
      $('.topmain').addClass("sticky");
  } else {
      $('.topmain').removeClass("sticky");
  }
});
// sticky-header-area-end //


// One-page-smoothly-scroll-area-start //
function scrollToSection(event) {
    event.preventDefault();
    var $section = $($(this).attr('href')); 
    $('html, body').animate({
      scrollTop: $section.offset().top
    }, 1000);
  }
  $('[data-scroll]').on('click', scrollToSection);

// One-page-smoothly-scroll-area-end //

});


// scroll-to-top-area-start //
var scrollTop = $(".scrollTop");
$(window).scroll(function () {
$(this).scrollTop() > 100 ? $(scrollTop).css("opacity", "1") : $(scrollTop).css("opacity", "0")
  }),
$(scrollTop).click(function () {
return $("html, body").animate({
  scrollTop: 0
   }, 800),
  !1
});
// scroll-to-top-area-end //


    // password-eye-open-close-area-start //
$('.password-eye').click(function(){
  $(this).toggleClass("active");
});
// password-eye-open-close-area-end //


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


// client-slider-area-start //
if ($('.owl-carousel.client-slider').length > 0) {
  $('.owl-carousel.client-slider').owlCarousel({
      loop: true,
      margin: 24,
      nav: false,
      smartSpeed: 2000,
      responsive: {
          0: {
              items: 1
          },
          700: {
              items: 2
          },
          1000: {
              items: 3
          }
      }
  })
}
// client-slider-area-end //

// partners-brand-area-start // 
if ($('.owl-carousel.partners-slider').length > 0) {
  $('.owl-carousel.partners-slider').owlCarousel({
      loop: true,
      margin: 24,
      nav: false,
      dots: false,
      smartSpeed: 2000,
      responsive: {
          0: {
              items: 1
          },

          550: {
              items: 2
          },
          700: {
              items: 3
          },
          1200: {
              items: 5
          },
          1400: {
              items: 5
          }
      }
  })
}

// partners-brand-area-end // 


// Smooth-Scrolling-clicking-the-navigation-bar-area-start //
$('')
.click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { 
            return false;
          } else {
            $target.attr('tabindex','-1'); 
            $target.focus(); 
          };
        });
      }
    }
  });

  // Smooth-Scrolling-clicking-the-navigation-bar-area-end //



