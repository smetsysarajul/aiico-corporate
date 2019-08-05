$(document).ready(function() {
  $(".nav-item, .dropdown-toggle").hover(
    function() {
      $(">.dropdown-menu", this)
        .stop(true, true)
        .fadeIn("fast");
      $(this).addClass("open");
    },
    function() {
      $(">.dropdown-menu", this)
        .stop(true, true)
        .fadeOut("fast");
      $(this).removeClass("open");
    }
  );
});

$(document).ready(function() {
  $(".nav-item, .dropdown-submenu").hover(
    function() {
      $(">.dropdown-menu-column--child", this)
        .stop(true, true)
        .fadeIn("fast");
      $(this).addClass("open");
    },
    function() {
      $(">.dropdown-menu-column--child", this)
        .stop(true, true)
        .fadeOut("fast");
      $(this).removeClass("open");
    }
  );
});

window.onscroll = function() {
  stickNav();
  stickServicesNav();
};

var navbar = $(".header__navigation");
var servicesNav = $(".services-tab");

var sticky = navbar.offset().top;
var servicesSticky = servicesNav.offset() ? servicesNav.offset().top - navbar.outerHeight(true) * 2 : 0;

function stickNav() {
  if (window.pageYOffset >= sticky) {
    navbar.addClass("fixed-top");
  } else {
    navbar.removeClass("fixed-top");
  }
}

function stickServicesNav() {
  if (window.pageYOffset >= servicesSticky) {
    servicesNav.find(".nav").addClass("fixed-top");
    servicesNav.find(".nav").css("top", navbar.outerHeight(true) + "px");
    servicesNav.find(".nav").css("z-index", 1010);
  } else {
    servicesNav.find(".nav").removeClass("fixed-top");
  }
}
