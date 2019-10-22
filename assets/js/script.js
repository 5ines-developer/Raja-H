$(document).on('ready', function() {
    $('.banner-slider').slick({
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    touchMove: true,
    arrows:false,
    });

  $(".lazy").slick({
    lazyLoad: 'ondemand', // ondemand progressive anticipated
    infinite: true,
    arrows: true,
    dots:false,
    nextArrow: '<span class="ch-right"><i class="fas fa-chevron-right ch"></i></span>',
    prevArrow: '<span class="ch-left"><i class="fas fa-chevron-left ch"></i></span>',
  });
  $('.one-time').slick({
    dots: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    touchMove: true,
    arrows:false,

    responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
]
    });

    $('.three-time').slick({
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    touchMove: true,
    responsive: [
{
  breakpoint: 992,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
  }
},
{
  breakpoint: 768,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
],
    nextArrow: '<span class="ch-right"><i class="fas fa-chevron-right ar"></i></span>',
    prevArrow: '<span class="ch-left"><i class="fas fa-chevron-left ar"></i></span>',
    });

// project detail slider
    $(".floor").slick({
      lazyLoad: 'ondemand', 
      infinite: true,
      arrows: true,
      dots:false,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
      
     
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
      nextArrow: '<span class="right-ar"><i class="fas fa-chevron-right "></i></span>',
      prevArrow: '<span class="left-ar"><i class="fas fa-chevron-left "></i></span>',
    });
  });


  //fixed sidebar scroll
// const postDetails = document.querySelector(".post-details");
// const postSidebar = document.querySelector(".post-sidebar");
// const postSidebarContent = document.querySelector(".post-sidebar > div");

// const controller = new ScrollMagic.Controller();
// const scene = new ScrollMagic.Scene({
//   triggerElement: postSidebar,
//   triggerHook: 0,
//   duration: getDuration }).
// addTo(controller);

// if (window.matchMedia("(min-width: 768px)").matches) {
//   scene.setPin(postSidebar, { pushFollowers: false });
// }

// // in your projects, you might want to debounce resize event for better performance
// window.addEventListener("resize", () => {
//   if (window.matchMedia("(min-width: 768px)").matches) {
//     scene.setPin(postSidebar, { pushFollowers: false });
//   } else {
//     scene.removePin(postSidebar, true);
//   }
// });

// function getDuration() {
//   return postDetails.offsetHeight - postSidebarContent.offsetHeight;
// }

$(".btn-group, .dropdown").hover(
  function () {
      $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
      $(this).addClass('open');
  },
  function () {
      $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
      $(this).removeClass('open');
  });