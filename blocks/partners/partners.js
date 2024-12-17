require("slick-carousel");

$(document).ready(function () {
  $(".partners-inner").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    speed: 500,
    autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 2,
          autoplay: true,
          infinite: true,
        },
      },
    ],
  });
});
