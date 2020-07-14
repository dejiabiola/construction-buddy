
// logic for the preloader
$(window).on('load', function () {
  $('#status').fadeOut()
  $('#preloader').delay(500).fadeOut()
  $('.navbar-brand').addClass('animate__animated animate__bounce')
})


//scroll trigger


// Animate on scroll logic
AOS.init({
  once: true,
  easing: 'ease-in-out',
  offset: 160,
  duration: 600,
});


// countdown-clock
$(function(){
  $('#countdown').countdown({
    year: 2021,// YYYY Format
    month: 1,// 1-12
    day: 1,// 1-31
    hour: 0,// 24 hour format 0-23
    minute: 0,// 0-59
    second: 0,// 0-59
    timezone: +1,
    labels:true,
    onFinish:function () {
      // Do something
    }
  });
});


  



