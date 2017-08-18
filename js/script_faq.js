jQuery(document).ready(function($) {

	var question = $('.question'),
			answer = $('.answer-wrap');

	answer.hide();
	question.click(function() {
		var elem = $(this).next("div.answer-wrap");
		answer.not(elem).slideUp(500);
		$(this).toggleClass("faqoff faqon");
		elem.slideToggle(500);
	});

});