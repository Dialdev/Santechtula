$(function(){
	
	$('.tabs__btn').click(function(){
			obj=$(this);
			num=obj.index();
			obj_s=$(this).parent().next().children(".tabs-wrap__tab");
		if (obj.hasClass('active')) {
			return;
		} else {		
			$(this).parent().children(".tabs__btn").removeClass('active');
			obj.addClass('active');
			obj_s.hide();
			obj_s.eq(num).toggle();
		}
	});
	$('.tabs__btn:first').click();

	$('.scroll-link').click(function(){
		var scroll_link = $(this).data();
		console.log(scroll_link['link']);
		if ($(scroll_link['link']).length != 0) {
	    	$('html, body').animate({ scrollTop: $(scroll_link['link']).offset().top }, 500);
        }
	});

});