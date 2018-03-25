(function($) {
  $(document).ready(function() {
    $(".Modern-Slider").slick({
      autoplay: true,
      autoplaySpeed: 10000,

      slidesToShow: 1,
      slidesToScroll: 1,
      pauseOnHover: false,
      dots: true,
      pauseOnDotsHover: false,
      fade: true,
      draggable: false,
      prevArrow: '<button class="PrevArrow"></button>',
      nextArrow: '<button class="NextArrow"></button>'
    });
  });
})(jQuery);
