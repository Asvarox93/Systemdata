(function($) {
  $(window).scroll(function() {
    const scroll = $(window).scrollTop();
    const windowHeight = 50;
    if (scroll >= windowHeight) {
      $(".navbar").addClass("fixed-top");
      $(".navbar").addClass("bg-light");
      $(".navbar").removeClass("navbar-position");
      $(".nav-item").addClass("nav-item-black");
    } else {
      $(".navbar").removeClass("fixed-top");
      $(".navbar").removeClass("bg-light");
      $(".navbar").addClass("navbar-position");
      $(".nav-item").removeClass("nav-item-black");
    }
  });
})(jQuery);
