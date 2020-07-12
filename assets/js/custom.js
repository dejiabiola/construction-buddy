
// logic for the preloader
$(window).on('load', function () {
  $('#status').fadeOut()
  $('#preloader').delay(500).fadeOut()
  $('.navbar-brand').addClass('animate__animated animate__bounce')
})



// Animate on scroll logic
AOS.init({
  once: true,
  easing: 'ease-in-out',
  offset: 160,
  duration: 600,
});




