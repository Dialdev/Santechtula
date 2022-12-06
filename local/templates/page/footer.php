</div>
	<?if (strpos($_SERVER['REQUEST_URI'], 'contact') == true) {?>
		
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=MUFpYeayxCS_KtVJwxtBmep0-0S5CbVW&width=100%&height=600&lang=ru_RU&sourceType=constructor&scroll=false"></script>
	<?}?>
	<div class="wrapper-footer"></div>
</div>
<footer class="footer page">
	<div class="center">
		<?$APPLICATION->IncludeComponent('bitrix:menu', "footer_menu", array(
					"ROOT_MENU_TYPE" => "bottom",
					"MENU_CACHE_TYPE" => "Y",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1",
					"USE_EXT" => "N",
					"ALLOW_MULTI_SELECT" => "N"
					)
				);?>
		<?$APPLICATION->IncludeComponent('bitrix:menu', "footer_menu2", array(
					"ROOT_MENU_TYPE" => "bottom2",
					"MENU_CACHE_TYPE" => "Y",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1",
					"USE_EXT" => "N",
					"ALLOW_MULTI_SELECT" => "N"
					)
				);?>
		<?$APPLICATION->IncludeComponent('bitrix:menu', "footer_menu2", array(
					"ROOT_MENU_TYPE" => "bottom3",
					"MENU_CACHE_TYPE" => "Y",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(),
					"MAX_LEVEL" => "1",
					"USE_EXT" => "N",
					"ALLOW_MULTI_SELECT" => "N"
					)
				);?>
		<div class="footer-contact">
			<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("/includes/footer-contact.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
		</div>
		<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("/includes/logo-footer.php"),
				Array(),
				Array("MODE"=>"html")
		);?>
			<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("/includes/copyright.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
		<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("/includes/dial.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
	</div>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'n5tgRPpmSi';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<p style="clear: both;"><a href="/upload/polit.pdf" target="_blank">правила обработки персональных данных </a></p>
</footer>

<img class="footer-banner" src="/includes/img/footer-banner.png" width="100%">
<img src="/includes/img/footer-banner.png" width="100%">
<script src="http://cdn.callibri.ru/callibri.js" type="text/javascript"></script>
<a class="toTop" href="#">
	<script>
	$(document).ready(function(){ 
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.toTop').fadeIn();
			} else {
				$('.toTop').fadeOut();
			}
		});
		$('.toTop').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
	});
	</script>
</a>





<!-- ВСПЛЫВАШКА УЗНАТЬ ЦЕНУ, удалять по самый боди  -->

<div id="myModal">
	<div class="modhead" style="">Узнайте цену!<span id="myModal__close" class="close">x</span></div>
<div class="modcontdiv">


<p>
Стоимость и количество товара уточняйте у нашего менеджера!
</p>


<a href="tel:+74872587450" class="callibri_phone header-contact__link header-contact__link_phone tel1">+7 (4872) 58-74-50</a>
<br>
<br>
<a href="tel:+79509295135" class="header-contact__link header-contact__link_phone tel3">+7 (950) 929-51-35</a>

</div>
</div>
<div id="myOverlay"></div>


<style>

.uznacen{
cursor: pointer;
}

/* всплывашка */
#myModal {
  width: 298px; 
		height: 224px;

  margin: 0 auto;
		/*padding: 18px 9px;*/
  border-radius: 4px;
  background: #fafafa;
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  margin: auto;
  display: none;
  opacity: 0;
  z-index: 38;
  text-align: center;
		font-size: 1.1rem;
}

.modhead{
display: block;
width: 100%;
color: #fff;
		text-transform: uppercase;
background: #CB1616;
		/*padding: 0.3rem;*/
padding-top: 1rem;
border-top-left-radius: 4px;
border-top-right-radius: 4px;
}

	.hetit{
		color: #fff;
		margin-top: 1rem;
}

	.modcontdiv{
		padding: 2rem;
		text-align: center;
}

#myModal #myModal__close {
		/*width: 21px; 
		height: 21px;*/
		position: absolute;
		top: 1px; 
		right: 11px;
  cursor: pointer;
  display: block;
		/*padding-top: 0.4rem;
padding-bottom: 0.2rem;
padding-left: 0.6rem;
		padding-right: 0.6rem;*/
		/*margin-bottom: 10px;
		margin-right: 10px;*/
		/*font-size: 29px;*/
		color: #fff;
line-height: 1.0;
		border: 1px solid #fff;
}
#myOverlay {
  z-index: 37;
  position: fixed;
  background-color: rgba(0,0,0,.7);
  width: 100%; height: 100%;
  top: 0; left: 0;
  cursor :pointer;
  display :none;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
  $('.uznacen').click( function(event){
    event.preventDefault();
    $('#myOverlay').fadeIn(297, function(){
      $('#myModal') 
      .css('display', 'block')
      .animate({opacity: 1}, 198);
    });
  });

  $('#myModal__close, #myOverlay').click( function(){
    $('#myModal').animate({opacity: 0}, 198,
      function(){
        $(this).css('display', 'none');
        $('#myOverlay').fadeOut(297);
    });
  });
});
</script>


</body>
</html>