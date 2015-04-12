// animate by Kevin McCoy 2015
$(document).ready(function() {



	//Minimize all section skiping the first one for each div.accordion
	$('div.accordion').each(function(){
			$(this).find('section').filter(':gt(0)').addClass('hide');
		}
	)

	//Animate accordion each time diffrent header get clicked
	$('article').on('click', 'header', function() {
		$(this).next().slideDown(200).prev().parent().siblings().find('section').slideUp(200);
	})



});
