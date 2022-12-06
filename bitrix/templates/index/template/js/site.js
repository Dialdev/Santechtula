function swap(){
  next = $('.banner-block__click .active').next();
  if (next.length) { next.click(); } else { $('.banner-block__knob:first').click(); }
};

function prev(){
	if ($('.news__longblock').css('left')!='0px') return;
	$('.news__longblock').animate({'left':'-250px'},1000,function(){
		$('.news__longblock').css('left','0px');
		$('.news-item:first').detach().appendTo('.news__longblock');
	});  
}

function next(){
	if ($('.news__longblock').css('left')!='0px') return;
	$('.news__longblock').css('left','-250px');
	$('.news-item:last').detach().prependTo('.news__longblock');
	$('.news__longblock').animate({'left':'0px'},1000);  
}

$(function() {

	let filterContainers = document.querySelectorAll('.bx_filter_container');

	Array.from(filterContainers).forEach(e => {
		BX.addClass(e, 'active')
	})

	const urlSearchParams = new URLSearchParams(window.location.search);
	const params = Object.fromEntries(urlSearchParams.entries());
	console.log(params)
	let strToLinks = '&';
	if (params['set_filter'] && (params['set_filter'] == 'y' || params['set_filter'] == 'Y')) {
		strToLinks += 'set_filter=y';

		for (var prop in params) {
			if (Object.prototype.hasOwnProperty.call(params, prop)) {
				if (prop.includes('arrFilter')) {
					strToLinks += `&${prop}=${params[prop]}`;
				}

			}
		}
	}

	$('.catalog_sort a').attr('href', function(index, value)  {
		return `${value}${strToLinks}`
	})


	/* delivery */
	
	/*$('.deliv-btn').click(function(){
		$(this).next().find('.pickup-point').toggle();
	});*/
	
	count=$('.banner-block__item').length;
	$('.banner-block').append('<div class="banner-block__click"></div>');
	for(i=0;i<count;i++) $('.banner-block__click').append('<div class="banner-block__knob"><span class="banner-block__circle"></span></div>');
		$('.banner-block__knob:first').addClass('active');


	/*$(".banner-block").hover(function() {
	clearInterval(intervalID);
	}, function() {
		intervalID=setInterval(swap,4000);
	});*/
	  
	$('.banner-block__knob').click(function(){
		if ($(this).hasClass('active')) return;
			id=$(this).index();
		$('.banner-block__click .active').removeClass('active');
		$(this).addClass('active');
		$('.banner-block__item').fadeOut();
		$('.banner-block__item:eq('+id+')').fadeIn();
	});
	$('.news__arrow_left').click(next);
	$('.news__arrow_right').click(prev);
	$('.lb').lightBox();
	$(".search-btn").click(function(){
	  	$(".search").fadeIn("slow");
	  });
});

$.fn.setCursorPosition = function(pos) {
	if ($(this).get(0).setSelectionRange) {
	  $(this).get(0).setSelectionRange(pos, pos);
	} else if ($(this).get(0).createTextRange) {
	  var range = $(this).get(0).createTextRange();
	  range.collapse(true);
	  range.moveEnd('character', pos);
	  range.moveStart('character', pos);
	  range.select();
	}
  };

$(function(){
   $("#ORDER_PROP_2").click(function(){
	$(this).setCursorPosition(4);
  }).mask("+7 (999) 999-9999");
   $("#form_text_2").click(function(){
	$(this).setCursorPosition(4);
  }).mask("+7 (999) 999-9999");
   $("#form__text_2").click(function(){
	$(this).setCursorPosition(4);
  }).mask("+7 (999) 999-9999");
});

  $(function(){
  $('.header-contact__feedback').click(function(){
    $(this).toggleClass('open');
    $('.call-back-form').toggle();
    $("body").append("<div id='overlay'></div>");
      $('#overlay').show().css({'filter' : 'alpha(opacity=80)'});
      return false;
  });
  
  $(".call-back-form .close").click(function(){
    $(".call-back-form").stop().fadeOut();
    $('#overlay').remove('#overlay');
  });

  if ($('.popup_success').length)
		$("body").append("<div id='overlay'></div>");
		$('#overlay').show().css({'filter' : 'alpha(opacity=80)'});
		$('.popup-overlay,.popup_success').show().delay(10000).fadeOut(function(){
			$('.popup_success').remove();
			$('#overlay').remove('#overlay');
		});

	$(".popup_success .close").click(function(){
    	$(".popup_success").stop().fadeOut();
    	$('#overlay').remove('#overlay');
  	});

	$( ".header-menu div>ul>li>ul>li>a.header-menu__link" ).on('mouseenter', function(){
	if($(this).parent().hasClass("canclick")){
		return true;
	} else {
		$(".header-menu div>ul>li>ul").find(".canclick").removeClass('canclick')
		$(this).parent().addClass('canclick');
		return false;
		}
	});

  	$('.min-img img').click(function(){
    $('.min-img .active').removeClass('active');
      image=$(this).attr('src');
      $(this).parent('span').addClass('active');
    $('.big-img img').attr('src', image);
    $('.big-img .lb').attr('href', image);
  });	

	var conveyor = $('.min-img .longblock'),
	    item = $('.min-img .item span');
	    //console.log(item);
	    conveyor.css('width', item.length * 114);
	      var sliderOpts = {
	    max: (item.length * 114) - 450,
	    slide: function(e, ui) { 
	        conveyor.css("left", "-" + ui.value + "px");
	    }
	  };
	 /* $(".slider").slider(sliderOpts);*/

  	/*var conveyor2 = $('.info-colors__longblock'),
	    item = $('.info-colors__item');
	    //console.log(item);
	    conveyor.css('height', item.length * 55 / 3);
	      var sliderOpts = {
	    max: (item.length * 55 / 3),
	    value: 200,
	    orientation: 'vertical',
	    slide: function(e, ui) { 
	        conveyor2.css("top", "+" + ui.value + "px");
	    }
	  };*/


	  /*$('.info-colors__longblock').jScrollPane();

	  $(".info-colors__slider").slider(sliderOpts);*/

});
  $(function(){
	  /* asc-question */
	  
	  $('.asc-question__btn').click(function(){
		  $('.asc-question__form').slideToggle();
	  });
	  
	  /* smoothDivScroll */
	  
		if($(".index-sale,.index-catalog-scroll").length > 0){
		  
		$(".index-sale,.index-catalog-scroll").smoothDivScroll({
		  autoScrollingMode: "always",
		  autoScrollingDirection: "endlessLoopRight",
		  autoScrollingStep: 1,
		  autoScrollingInterval: 25, 
		  mousewheelScrolling: "allDirections",
		  manualContinuousScrolling: true,
		});
		$(".index-sale,.index-catalog-scroll").bind("mouseover", function () {
		  $(this).smoothDivScroll("stopAutoScrolling");
		}).bind("mouseout", function () {
		  $(this).smoothDivScroll("startAutoScrolling");
		});
		}
		/*Производители*/
		if($(".manufacturer__move").length > 0){
		  
		$(".manufacturer__move").smoothDivScroll({
		  mousewheelScrolling: "allDirections",
		  manualContinuousScrolling: true
		});
		}

	  
	  /* metrika */
		  
	$('.call-back-form form').submit(function(){
        yaCounter38429865.reachGoal('ORDER_CALL');
		console.log("ORDER_CALL ok");
    });
	$('.feedback form').submit(function(){
        yaCounter38429865.reachGoal('INDEX_ORDER_CALL');
		console.log("INDEX_ORDER_CALL ok");
		});
		
		$('.tel1').click(function(){
			yaCounter38429865.reachGoal('tel1');
			console.log("tel1 ok");
		});
		$('.tel2').click(function(){
			yaCounter38429865.reachGoal('tel2');
			console.log("tel2 ok");
		});
		$('.tel3').click(function(){
			yaCounter38429865.reachGoal('tel3');
			console.log("tel3 ok");
		});
	
	$('.delivery-dop__btn').click(function(){
		$('.delivery-dop__hide').slideToggle();
	});
	
	/*------кастомный скролл------*/
	
	$('.bx_filter_block').niceScroll({
		cursorcolor:'#cb1616',
		cursorwidth: '7',
		cursorborderradius: '0',
		background: '#888888',
		cursorborder: '0',
		cursoropacitymin: '1'
	});
	
	/*------кастомный чекбокс------*/
	
	$('.checkbox span').click(function(){
		if (!$(this).parent().hasClass('disabled')) {
			obj = $(this).prev();
			if(obj.prop('checked')) {
				obj.prop('checked',false);
			} else {
				obj.prop('checked',true);
			}
		}
	});
	
	
	
});