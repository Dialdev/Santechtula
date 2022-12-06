<!DOCTYPE html>
<html>
<head>
<link href="/bitrix/templates/index/template/css/normalize.css" rel="stylesheet">

<script src="/bitrix/templates/index/template/js/jquery-1.11.1.min.js"></script>
<script src="/bitrix/templates/index/template/js/selectivizr-min.js"></script>
<script src="/bitrix/templates/index/template/js/placeholder.js"></script>
<script src="/bitrix/templates/index/template/js/jquery.nicescroll.min.js"></script>
<link rel="stylesheet" type="text/css" href="/bitrix/templates/index/styles.css" media="screen" />

<link rel="stylesheet" type="text/css" href="/bitrix/templates/index/template/css/jquery-ui-1.7.2.custom.css">
<script type="text/javascript" src="/bitrix/templates/index/template/js/jquery-ui.min.js"></script>
<script src="/bitrix/templates/index/template/js/jquery.maskedinput.js" type="text/javascript"></script>

<script type="text/javascript" src="/bitrix/templates/index/lightbox/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="/bitrix/templates/index/lightbox/jquery.lightbox-0.5.css" media="screen" />

<script type="text/javascript" src="/bitrix/templates/index/template/js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="/bitrix/templates/index/template/js/jquery.mousewheel.js"></script>
<link rel="stylesheet" type="text/css" href="/bitrix/templates/index/template/css/jquery.jscrollpane.css" media="screen" />

<script src="/bitrix/templates/index/template/js/site.js"></script>

<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?> | Магазин сантехники «Афоня»</title>
<?
$curPage = $APPLICATION->GetCurPage(true);
if (preg_match('/^\/catalog/', $curPage)) {
    echo '<link rel="canonical" href="' . $curPage . '" />';
};
?>
 <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div class="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrapper">
<header class="header">

	<nav class="header-menu">
		<div class="center">

				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu1", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"USE_EXT" => "Y",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu1",
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
  $APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"site", 
	array(
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"SHOW_PERSONAL_LINK" => "N",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",
		"SHOW_PRODUCTS" => "N",
		"POSITION_FIXED" => "N",
		"COMPONENT_TEMPLATE" => "site",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_AUTHOR" => "N",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"HIDE_ON_BASKET_PAGES" => "N"
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
<!--div class="banner-block page">
	<div class="banner-block__item banner-block__item_1"></div>
	<div class="banner-block__item banner-block__item_2"></div>
	<div class="banner-block__item banner-block__item_3"></div>
</div-->
<div class="center content">
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"site", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => "site"
	),
	false
);?>
