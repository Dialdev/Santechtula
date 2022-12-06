<div class="news">
	<div class="center">
		<?$APPLICATION->IncludeComponent("bitrix:form.result.list","index-review",Array("WEB_FORM_ID" => 2));?>
	</div>
</div>
<?/*<div class="news">
	<div class="center">

		<h2 class="h2 news__h2">Новости</h2>
		<div class="news__wrapper">
			<div class="news__longblock">
				<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news-index", 
	array(
		"COMPONENT_TEMPLATE" => "news-index",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "120",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

			</div>	
		</div>
		<div class="news__arrow news__arrow_left"></div>
		<div class="news__arrow news__arrow_right"></div>
		<a href="/news/" class="learnmore learnmore_news">Все новости</a>
	</div>
</div>*/?>
<div class="center">
	
	<div class="about">
		<h2 class="h2">Добро пожаловать к нам на сайт!</h2>
		<p>Добро пожаловать в наш интернет-магазин сантехники «Афоня»!</p>
		<p>Мы рады каждому посетителю нашего сайта. Наша задача не просто продавать сантехнику, а заработать доверие наших покупателей.Наш ассортимент очень широк, он включает тысячи единиц товара. Наша компания постоянно расширяет свой ассортимент, и планирует занимать новые ниши на рынке. Мы стараемся максимально упростить для наших покупателей процесс покупки сантехники. Избавляем Вас от необходимости искать время на поездку в магазин.</p>
		<p>А если у Вас возникнут вопросы относительно товара, доставки или его установки, то стоит только позвонить или отправить заявку, и наши специалисты квалифицированно помогут Вам.</p>
		<!--a href="/about/" class="learnmore learnmore_about">Узнать больше</a-->
	</div>
	<div class="feedback">
		<h2 class="h2">Обратная связь</h2>

			<?if ($_GET['formresult']=='addok') {?>
				<p>Заявка принята. В ближайшее время с Вами свяжется наш менеджер.</p>
			<?} else {?>
				<?$APPLICATION->IncludeComponent("bitrix:form.result.new","feedback",Array("WEB_FORM_ID" => 1, "LIST_URL" => ""));?>
			<?}?>
	
	</div>
	
	<div class="manufacturer">
		<h2 class="h2">Производители</h2>
		<div class="manufacturer__wrap">
			<div class="manufacturer__move">
				<img src="bitrix/templates/index/template/img/manufacturers/1.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/2.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/3.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/4.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/5.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/6.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/7.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/8.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/9.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/10.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/11.jpg" alt="">
				<img src="bitrix/templates/index/template/img/manufacturers/12.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<footer class="footer">
	<div class="center">
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_menu", 
	array(
		"ROOT_MENU_TYPE" => "bottom",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footer_menu",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N"
	),
	false
);?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_menu2", 
	array(
		"ROOT_MENU_TYPE" => "bottom2",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footer_menu2",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N"
	),
	false
);?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_menu2", 
	array(
		"ROOT_MENU_TYPE" => "bottom3",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footer_menu2",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N"
	),
	false
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
<p style="clear: both;"><a href="/upload/polit.pdf" target="_blank">Правила обработки персональных данных </a></p>

</footer>
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