require("slick-carousel");

$(document).ready(function () {
  $(".product-slider-images").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: false,
    prevArrow: $(".slick-prev1"),
    nextArrow: $(".slick-next1"),
  });
});
