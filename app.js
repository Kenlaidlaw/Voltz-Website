$(".slider").slick({
  infinite: true,
  dots: true,
  slideToShow: 1,
  slideToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

// Get the current year for the copyright
$("#year").text(new Date().getFullYear());
