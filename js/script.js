jQuery(document).ready(function($) {

	$('.toggle').click(function() {
    var dropdown = $('.toggle, .main_nav');

    if(dropdown.hasClass('active')) {
      dropdown.removeClass('active');
    } else {
      dropdown.addClass('active');
    }
  });

  $(window).resize(function() {
    $('.main_nav, .toggle').removeClass('active');
  });

});