var sticky;
var navbar;
var sticky_mobile;
var navbar_mobile;
var servicesSticky;
var servicesNav;
attachNavbarFunction();
attachNavbarFunction();
function attachNavbarFunction() {
  $(document).ready(function () {
    var initialHeight;
    $(".header__navigation .nav-item, .dropdown-toggle").trigger('mouseover');
    $(".header__navigation .nav-item, .dropdown-toggle").trigger('mouseleave');
    $(".dropdown-submenu").trigger('mouseover');
    $(".dropdown-submenu").trigger('mouseleave');
    $(".header__navigation .nav-item, .dropdown-toggle").hover(
      function () {
        $(">.dropdown-menu", this)
          .stop(true, true)
          .fadeIn("fast");
        $(this).addClass("open");

        initialHeight = $(this)
          .closest(".dropdown")
          .find(".dropdown-menu")
          .outerHeight();
      },
      function () {
        $(">.dropdown-menu", this)
          .stop(true, true)
          .fadeOut("fast");
        $(this).removeClass("open");
      }
    );

    $(".header__navigation .nav-item, .dropdown-submenu").hover(

      function () {
        $(">.dropdown-menu-column--child", this)
          .stop(true, true)
          .fadeIn("fast");
        $(this).addClass("open");

        var height = $(this)
          .find(".dropdown-menu-column--child")
          .outerHeight();

        if (initialHeight < height) {
          $(this)
            .closest(".dropdown-menu-block")
            .height(height);
        }
      },
      function () {
        $(">.dropdown-menu-column--child", this)
          .stop(true, true)
          .fadeOut("fast");
        $(this).removeClass("open");
        $(this)
          .closest(".dropdown-menu-block")
          .height("auto");
      }
    );

    $("#openNavBarIcon").on("click", function () {
      $(".navbar-mobile__body")
        .stop(true, true)
        .fadeIn("slow");
      $(".navbar-mobile__body").show();

      var mobileOffset = $(".navbar-nav-block").offset().top;
      var navHeight = $(window).height() - mobileOffset;
      $(".mobile__navigation .navbar-nav-block").css("height", navHeight + "px");
    });

    $("#closeNavBarIcon").on("click", function () {
      $(".navbar-mobile__body")
        .stop(true, true)
        .fadeOut("slow");
      $(".navbar-mobile__body").hide();
    });

    $(".mobile__navigation .mobile-dropdown").on("click", function () {
      $(this)
        .closest(".navbar-nav")
        .find(".navbar > .nav-item.open")
        .removeClass("open");

      $(this)
        .closest(".nav-item")
        .addClass("open");
    });

    $(".nav-header").on("click", function () {
      $(this)
        .closest(".navbar-nav")
        .find(".nav-item.open")
        .removeClass("open");
    });

    $(".mobile__navigation .mobile-submenu .mobile-dropdown").on("click", function () {
      $(this)
        .closest(".navbar-nav")
        .find(".navbar > .nav-item.open")
        .removeClass("open");

      $(this)
        .closest(".nav-item")
        .addClass("open");
    });

  window.onscroll = function () {
    stickNav();
    stickNavMobile();
    stickServicesNav();
  };

  navbar = $(".header__navigation");
  navbar_mobile = $(".mobile__navigation");
  servicesNav = $(".services-tab");

  sticky = navbar.offset().top;
  sticky_mobile = navbar_mobile.offset().top;

  if (window.outerWidth < 768) {
    servicesSticky = servicesNav.offset() ? servicesNav.offset().top - navbar_mobile.outerHeight(true) * 2 : 0;
  } else {
    servicesSticky = servicesNav.offset() ? servicesNav.offset().top - navbar.outerHeight(true) * 2 : 0;
  }

  servicesNav.find(".nav-item").on("click", function () {
    window.scrollTo(0, servicesSticky);
  });

  });
}




function stickNav() {
  if (window.pageYOffset >= sticky) {
    navbar.addClass("fixed-top");
  } else {
    navbar.removeClass("fixed-top");
  }
}

function stickNavMobile() {
  if (window.pageYOffset >= sticky_mobile) {
    navbar_mobile.addClass("fixed-top");
  } else {
    navbar_mobile.removeClass("fixed-top");
  }
}

function stickServicesNav() {
  if (window.pageYOffset >= servicesSticky) {
    servicesNav.find(".nav").addClass("fixed-top");
    if (window.outerWidth < 768) {
      servicesNav.find(".nav").css("top", navbar_mobile.outerHeight(true) + "px");
    } else {
      servicesNav.find(".nav").css("top", navbar.outerHeight(true) + "px");
    }
    servicesNav.find(".nav").css("z-index", 1010);
    servicesNav.find(".tabs__inner").css("margin-top", $("#servicesTab").outerHeight(true) + "px");
  } else {
    servicesNav.find(".nav").removeClass("fixed-top");
    servicesNav.find(".tabs__inner").css("margin-top", "0px");
  }
}

