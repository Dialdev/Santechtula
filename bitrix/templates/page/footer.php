
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
</body>
</html>