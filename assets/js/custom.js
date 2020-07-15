
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
    year: 2020,// YYYY Format
    month: 10,// 1-12
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


// magnific popup configuration
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Designer: @Nonso</small>' + '<small>by Developer: @deji.ab</small>';
			}
		}
	});
});

// Darkmode.js config
var options = {
  bottom: '64px', // default: '32px'
  right: 'unset', // default: '32px'
  right: '32px', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: false, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();



  



