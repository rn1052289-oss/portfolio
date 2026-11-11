// JavaScript Document
jQuery(function ($) {
  const $slider = $('.js-beans-slider');
  if (!$slider.length) return;

  $slider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    arrows: true,
    dots: false,
    speed: 320,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});
