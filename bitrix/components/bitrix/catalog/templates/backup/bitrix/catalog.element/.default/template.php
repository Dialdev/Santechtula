<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
 //echo "<pre>";
 //print_r($arResult);
?>
<script type="text/javascript">
  $(function(){
  $('.buy').click(function(){
    $(this).toggleClass('open');
    $('#pop_up2').toggle();
    $(".close").attr('href', $(this).attr('data-add'));
    $("body").append("<div id='overlay'></div>");
      $('#overlay').show().css({'filter' : 'alpha(opacity=80)'});
      return false;
  });
  
  $("#pop_up2 .close").click(function(){
    $("#pop_up2").stop().fadeOut();
    $('#overlay').remove('#overlay');
  });

});
</script>

<h2 class="h2"><?=$arResult["NAME"]?></h2>
<h3 class="h3__attention">Цену и количество уточняйте у менеджера.</h3>
<div class="gall">
	<div class="gall-item">	
		<div class="big-img">
			<div class="icon">
				<?if($arResult["PROPERTIES"]["SALE"]["VALUE"]!=""):?>
					<span class="red"><?=$arResult["PROPERTIES"]["SALE"]["VALUE"]?>%</span>
				<?endif;?>
				<?if($arResult["PROPERTIES"]["HIT"]["VALUE"]!=""):?>
					<span>Хит!</span>
				<?endif;?>
			</div>
			<?if($arResult["DETAIL_PICTURE"]["SRC"]!=""){?>
				<a class="lb" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt=""></a>
			<?} else {?>
				<a class="lb" href="/bitrix/templates/index/template/img/no_photo.png"><img src="/bitrix/templates/index/template/img/no_photo.png" alt=""></a>
			<?}?>
		</div>
		<div class="min-img">
			<div class="longblock">
				<div class="item">
					<?
					$counter = count($arResult['PROPERTIES']['FOTO']['VALUE']);?>
					<?if($arResult["PREVIEW_PICTURE"]["SRC"]!=""){?>
						<span class="active"><img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt=""></span>
					<?} else {?>
						<span class="active"><img src="/bitrix/templates/index/template/img/no_photo.png" alt=""></span>
					<?}?>
					<?
					if($arResult['PROPERTIES']['FOTO']['VALUE'][0]!=""):
					for ($i=0; $i<$counter; $i++) {?>
					<span><img src="<?=CFile::GetPath($arResult['PROPERTIES']['FOTO']['VALUE'][$i])?>" alt=""></span>
						<?}
					endif;
					?>
				</div>
			</div>
		</div>
		<?if(count($arResult['PROPERTIES']['FOTO']['VALUE'])>3):?>
			<div class="yellowline"><div class="slider"></div></div>
		<?endif;?>
	</div>
</div>	
<div class="info">

	<div class="buy-block">
		<span class="price">Цена: <span><?=number_format($arResult["PRICES"]["Розничные"]["VALUE"], 0, ',', ' ');?> руб.</span> </span>
			<?/*<span class="buyhome" data-name="<?=$arResult["NAME"]?>" data-price="<?=$arResult["PRICES"]["BASE"]["VALUE"]?>">Заказать</span>*/?>
		<span class="article">Артикул: <span><?=$arResult["PROPERTIES"]["ARTICLE"]["VALUE"]?></span> </span>
		 
	</div>

	<?if ($arResult["PROPERTIES"]["COLOR"]["VALUE_ENUM_ID"]!="") {?>
      <div class="info-colors">
	      <h3 class="info-colors__title">Цветовые решения:</h3>
	      <div class="info-colors__longblock">
		      <?foreach($arResult["PROPERTIES"]["COLOR"]["VALUE_ENUM_ID"] as $key => $arColor) {?>
		      	<div class="info-colors__item">
		      		<span class="info-colors__name"><?=$color_name[$arColor] = $arResult["PROPERTIES"]["COLOR"]["VALUE"][$key];?></span>
		        	<img class="info-colors__img" alt="<?=$color_name[$arColor] = $arResult["PROPERTIES"]["COLOR"]["VALUE"][$key];?>" title="<?=$color_name[$arColor] = $arResult["PROPERTIES"]["COLOR"]["VALUE"][$key];?>" src="/upload/colors/<?=$arColor?>.jpg">
		      	</div>
		      <?}?>
	      </div>
      </div>
    <?}?>
	<?if ($arResult["PROPERTIES"]["COLOR"]["VALUE_ENUM_ID"]=="") {?>
	<div class="stats">
		<h3>Характеристики:</h3>
		<?if ($arResult["PROPERTIES"]["OPTION"]["VALUE"]!="") {?>
			<table class="specs">
			<?
			$counter = count($arResult["PROPERTIES"]["OPTION"]["VALUE"]);
			for ($i=0; $i<$counter; $i++) {?>
			<tr> 
				<td class="name"><?=$arResult["PROPERTIES"]["OPTION"]["VALUE"][$i];?></td>
				<td><?=$arResult["PROPERTIES"]["OPTION"]["DESCRIPTION"][$i];?></td>
			</tr>
			<?}
			?>
			</table> 
		<? }?> 
	</div>
	<?}?>
	<div class="btn-block">
		<a class="buy">Добавить в корзину</a>
	</div>

</div>
<div class="clear"></div>
<?if ($arResult["PROPERTIES"]["COLOR"]["VALUE_ENUM_ID"]!="") {?>
	<div class="stats">
		<h3>Технические характеристики:</h3>

		<?
			$counter = count($arResult["PROPERTIES"]["OPTION"]["VALUE"]);
		?>

		<?if ($arResult["PROPERTIES"]["OPTION"]["VALUE"]!="") {?>
		<div>
			<table class="moiki-specs">
			<?
			for ($i=0; $i<ceil($counter/2); $i++) {?>
			<tr> 
				<td class="moiki-specs__name"><?=$arResult["PROPERTIES"]["OPTION"]["VALUE"][$i];?></td>
				<td><?=$arResult["PROPERTIES"]["OPTION"]["DESCRIPTION"][$i];?></td>
			</tr>
			<?}
			?>
			</table> 
			<table class="moiki-specs">
			<?
			for ($i=ceil($counter/2); $i<$counter; $i++) {?>
			<tr> 
				<td class="moiki-specs__name"><?=$arResult["PROPERTIES"]["OPTION"]["VALUE"][$i];?></td>
				<td><?=$arResult["PROPERTIES"]["OPTION"]["DESCRIPTION"][$i];?></td>
			</tr>
			<?}
			?>
			</table> 
		</div>
		<?}?> 
		<div class="clear"></div>
	</div>
	<?}?>
<?if ($arResult['DETAIL_TEXT']!="") {?>
<div class="text">
		<h3>Описание</h3>
		<?=$arResult['DETAIL_TEXT']?>
	</div>
	<?}?>


<div class="similar">
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"similar",
	Array(
		"COMPONENT_TEMPLATE" => "catalog",
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "7",
		"SECTION_ID" => $arResult["IBLOCK_SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array("", ""),
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_FIELD2" => "",
		"ELEMENT_SORT_ORDER2" => "",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "4",
		"LINE_ELEMENT_COUNT" => "",
		"PROPERTY_CODE" => array("", ""),
		"OFFERS_LIMIT" => "5",
		"TEMPLATE_THEME" => "blue",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array("BASE"),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(),
		"ADD_TO_BASKET_ACTION" => "ADD",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SEF_RULE" => "",
		"SECTION_CODE_PATH" => ""
		)
	);?>
</div>


<div id="pop_up2">
    <h2>Товар успешно добавлен в корзину!</h2>
    <a class="close" href="<?=$arResult["ADD_URL"]?>">X</a>
    <a class="buy-add" id="data-buy" href="<?=$arResult["BUY_URL"]?>">Перейти в корзину</a>
    <a class="buy-add" id="data-add" href="<?=$arResult["ADD_URL"]?>">Продолжить покупки</a>
</div> 