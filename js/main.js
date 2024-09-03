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
              $('#menu-area').addClass("sticky");
          } else {
              $('#menu-area').removeClass("sticky");
          }
        });
// sticky-header-area-end //


// latest-update-swiper-slider-area-start //
var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});

// latest-update-swiper-slider-area-end //


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



});