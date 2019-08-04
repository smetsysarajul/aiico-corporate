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
};

var navbar = $(".header__navigation");
var sticky = navbar.offset().top;

function stickNav() {
  if (window.pageYOffset >= sticky) {
    navbar.addClass("fixed-top");
  } else {
    navbar.removeClass("fixed-top");
  }
}
