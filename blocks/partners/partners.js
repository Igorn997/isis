require("slick-carousel");

$(document).ready(function () {
  $(".partners-inner").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: false,
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
