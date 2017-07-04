(function($){
	$(document).ready(function(){
		$(".atc").click(function(){
			alert("To add cake(s) to cart, you must first sign in.");
		});

		// $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      // console.log($(window).scrollTop());
    // if ($(window).scrollTop() > 280) {
    //   $('.bar').addClass('navbar-fixed');
    // }
    // if ($(window).scrollTop() < 281) {
    //   $('.bar').removeClass('navbar-fixed');
    // }

  //   var stickyNavTop = $('.bar').offset().top;
  // var stickyNav = function(){
  //   var scrollTop = $(window).scrollTop();

  //   if (scrollTop > stickyNavTop) { 

  //     $('.bar').addClass('sticky');
  //   } else {
  //     $('.bar').removeClass('sticky'); 
  //   }
  // };

  // stickyNav();

  // $(window).scroll(function() {
  //   stickyNav();
    
  // });
  // });

	});
})(jQuery);