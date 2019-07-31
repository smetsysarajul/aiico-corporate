$(document).ready(function() {
  $(".nav-item, .dropdown-item").hover(
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
