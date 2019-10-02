$("#top-nav").ready(function() {
  var showHide = true;
  $(".mobile-menu-burger").on("click", function() {
    if (!showHide) {
      $(".mobile-menu").hide();
    } else {
      $(".mobile-menu").show();
    }
    showHide = !showHide;
  });

  // close menu if click outside it
  $("body").on("click", function(e) {
    var $target = $(e.target);

    if (
      !$target.is(".mobile-menu-burger") &&
      !$target.is(".mobile-menu-burger *")
    ) {
      $(".mobile-menu").hide();
    }

    if (
      !$target.is(".menu-dropdown") &&
      !$target.is(".menu-dropdown *") &&
      !$target.is("#activate-sub-dropdown") &&
      !$target.is("#activate-sub-dropdown *")
    ) {
      $(".dropdown").hide();
      $(".sub-dropdown").hide();
    }
    // !$target.is('.menu-dropdown') && !$target.is('.menu-dropdown *')
  });

  $(".email").on("click", function() {});

  $(".phone").on("click", function() {});

  $(".menu-dropdown").hover(function() {
    $(".dropdown").show();
  });

  $("#activate-sub-dropdown").hover(function() {
    $(".sub-dropdown").show();    
  });
  
});