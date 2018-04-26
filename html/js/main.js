$(document).ready(function() {
	
	$('#tabs li a').click(function(e){
        $('#tabs li, #tab-content .current').removeClass('current');
        $(this).parent().addClass('current');
        var currentTab = $(this).attr('href');
        $(currentTab).addClass('current');
        e.preventDefault();
    });
    
	$('#slider ul').bxSlider({
    	mode: 'vertical', // can be horizontal or fade
    	easing: 'ease-out',
    	auto: true,
    	pause: 4000,
    	// autoHover: true, // if you want to pause the sliding when mouse is over slide
    	pager: true,
    	controls: false
    });
    
	$("#products .carousel").jCarouselLite({
		btnNext: '.next',
		btnPrev: '.prev',
		visible: 4
	});
	
	$('#tabs li').each(function(){
		var _title = $(this).find('.title')
		var _titleHeight = _title.height();
		_title.css('margin-top', (54 - _titleHeight) / 2);
	});

/*--- Every List classes First and Last ---*/

	$('ul').each(function(){
		$(this).find('li').first().addClass('first');
		$(this).find('li').last().addClass('last');
	});

});