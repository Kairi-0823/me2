$(function(){

  $(".slide-items").slick({
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      slidesToShow: 2,
      centerMode: true,
      responsive: [
        {
          breakpoint:450,
          settings: {
          slidesToShow: 1,
          },
        },
      ],
    });

    
  $(".slide-items2").slick({
      autoplay: true,
      autoplaySpeed: 1000,
      infinite: true,
      slidesToShow: 1,
      centerMode: true,
    });

  });
