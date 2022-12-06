<!DOCTYPE html>
<html>
<head>
<link href="/bitrix/templates/index/template/css/normalize.css" rel="stylesheet">

<script src="/bitrix/templates/index/template/js/jquery-1.11.1.min.js"></script>
<script src="/bitrix/templates/index/template/js/selectivizr-min.js"></script>
<script src="/bitrix/templates/index/template/js/placeholder.js"></script>
<script src="/bitrix/templates/index/template/js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="/bitrix/templates/index/template/js/jquery.nicescroll.min.js"></script>

<script type="text/javascript" src="/bitrix/templates/index/lightbox/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="/bitrix/templates/index/lightbox/jquery.lightbox-0.5.css" media="screen" />
<meta name="cmsmagazine" content="f22b5ad5e4bbe60ef30214757d5df9a1" />
	<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<script type="text/javascript" src="/bitrix/templates/index/jsscroll/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="/bitrix/templates/index/jsscroll/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/bitrix/templates/index/jsscroll/jquery.kinetic.js"></script>
<script type="text/javascript" src="/bitrix/templates/index/jsscroll/jquery.smoothDivScroll-1.3.js"></script>
<link rel="Stylesheet" type="text/css" href="/bitrix/templates/index/jsscroll/smoothDivScroll.css" />

<script src="/bitrix/templates/index/template/js/site.js"></script>



<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?> | «Афоня»</title> <!--[if IE]>n
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="icon" type="image/png" sizes="128x128" href="favicon.png" />


</head>
<body>
<div class="panel"><?$APPLICATION->ShowPanel();?></div>
<header class="header">	

	<nav class="header-menu">
		<div class="center">

				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"USE_EXT" => "Y",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N"
	),
	false
);?>
		</div>
	</nav>
	<div class="center">
		<?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("/includes/logo.php"),
			Array(),
			Array("MODE"=>"html")
		);?>
		
		<?
  $APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "site", array(
  "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
  "PATH_TO_PERSONAL" => SITE_DIR."personal/",
  "SHOW_PERSONAL_LINK" => "N",
  "SHOW_NUM_PRODUCTS" => "Y",
  "SHOW_TOTAL_PRICE" => "Y",
  "SHOW_PRODUCTS" => "N",
  "POSITION_FIXED" => "N"
  ),
  false,
  array(
  "0" => ""
  )
);
?>
		<div class="header-contact">
			<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("/includes/header-contacts.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
			<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("/includes/call-back.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
			
			<span class="search-btn"></span>
		<div class="search">
			<?
				$APPLICATION->IncludeComponent(
					"bitrix:search.form", 
					"site", 
					array(
						"PAGE" => "#SITE_DIR#search/",
						"USE_SUGGEST" => "N"
					),
					false
				);
				?>
		</div>
		</div>
	</div>
</header>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "slider",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?>

<div class="center">

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"catalog_index",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "products",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("",""),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	)
);?>



	
	<div class="clear"></div>
	
	<div class="catalog">
		<h2 class="h2"><a href="/catalog/">Хиты продаж</a></h2>
		<a href="/catalog/" class="learnmore learnmore_catalog learnmore_index-sale">Посмотреть все хиты продаж</a>

 <?
GLOBAL $arrFilterTop;
$arrFilterTop = array(
'PROPERTY_33' => 16,
);
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"index", 
	array(
		"COMPONENT_TEMPLATE" => "index",
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "7",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilterTop",
		"HIDE_NOT_AVAILABLE" => "N",
		"ELEMENT_COUNT" => "6",
		"LINE_ELEMENT_COUNT" => "",
		"PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"VIEW_MODE" => "SECTION",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"SEF_MODE" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array(
			0 => "Розничные",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"ADD_TO_BASKET_ACTION" => "ADD",
		"DISPLAY_COMPARE" => "N",
		"TEMPLATE_THEME" => "blue",
		"MESS_BTN_COMPARE" => "Сравнить",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_CART_PROPERTIES" => array(
		)
	),
	false
);?>		
	</div>
			<!--a href="/catalog/" class="learnmore learnmore_catalog">Все товары</a-->
	<div class="advantages">
		<h2 class="h2">Преимущества</h2>
		<div class="advantages-item">
			<span class="advantages-item__icon advantages-item__icon_1"></span>
			<h4 class="advantages-item__title">Все в одном месте</h4>
			<p>Удобный выбор товаров, вся продукция есть в одном магазине.</p>
		</div>
		<div class="advantages-item">
			<span class="advantages-item__icon advantages-item__icon_2"></span>
			<h4 class="advantages-item__title">Низкие цены</h4>
			<p>Проводятся акции и распродажи для клиентов Афони.</p>
		</div>
		<div class="advantages-item">
			<span class="advantages-item__icon advantages-item__icon_3"></span>
			<h4 class="advantages-item__title">Высокий ассортимент продукции</h4>
			<p>Большой ассортимент продукции представлено на прилавках и сайте.</p>
		</div>
		<div class="advantages-item">
			<span class="advantages-item__icon advantages-item__icon_4"></span>
			<h4 class="advantages-item__title">Каждый клиент родной для нас</h4>
			<p>Мы любим наших покупателей, и уважаем их выбор.</p>
		</div>
		<div class="advantages-item">
			<span class="advantages-item__icon advantages-item__icon_5"></span>
			<h4 class="advantages-item__title">Качественная продукция</h4>
			<p>Мы выбираем только качественных и проверенных поставщиков.</p>
		</div>
	</div>
</div>