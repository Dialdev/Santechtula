<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


/*$APPLICATION->IncludeComponent(
  "bitrix:catalog.section.list",
  "catalog",
  array(
    "IBLOCK_ID" => $arResult["IBLOCK_ID"],
    "SECTION_ID" => $arResult["PATH"]["0"]["ID"],
    "TOP_DEPTH" => "1",
    "ADD_SECTIONS_CHAIN" => "N",
    "CACHE_TYPE" => "N",
  ),
  $component,
  array("HIDE_ICONS" => "Y")
);*/?>
<script type="text/javascript">
	$(function(){
		$('.btn-buy').click(function(){
			$(this).toggleClass('open');
			$('#pop_up').toggle();
			$("#data-buy").attr('href', $(this).attr('data-buy'));
			$("#data-add").attr('href', $(this).attr('data-add'));
			$(".close").attr('href', $(this).attr('data-add'));
			$("body").append("<div id='overlay'></div>");
			$('#overlay').show().css({'filter' : 'alpha(opacity=80)'});
			return false;
		});

		$("#pop_up .close").click(function(){
			$("#pop_up").stop().fadeOut();
			$('#overlay').remove('#overlay');
		});

	});
</script>
<div class="pagi top">
  <?if ($arParams["DISPLAY_TOP_PAGER"])
  {
    ?><? echo $arResult["NAV_STRING"]; ?><?
  }?>
</div>

<h1 class="section-h2"><?$APPLICATION->ShowTitle(false)?></h1>
<h3 class="h3__attention">Цену и количество уточняйте у менеджера.</h3>
<?/*<p class="catalog_sort">Сортировать по цене: 

<a <?if ($_GET["sort"] == "catalog_PRICE_1"):?> class="actived" <?endif;?> href="<?=$arResult["SECTION_PAGE_URL"]?>?sort=catalog_PRICE_1&method=asc"> 
По возрастанию
</a> 

<a <?if ($_GET["sort"] == "catalog_PRICE_1"):?> class="actived" <?endif;?> href="<?=$arResult["SECTION_PAGE_URL"]?>?sort=catalog_PRICE_1&method=desc"> 
По убыванию 
</a> 

</p>*/?>
<div class="catalog-section">
<?
//echo "<pre>";
//print_r($arResult);
foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	$strMainID = $this->GetEditAreaId($arItem['ID']);
?>
<div class="item">
<?if ($arItem["PROPERTIES"]["SALE"]["VALUE"] != ''){?>
  <span class="item__sale">Акция</span>
<?}?>
	<a class="title" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<?=$arItem["NAME"]?>
	</a>
	<a class="picture" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
    <?if ($arItem["PREVIEW_PICTURE"]["SRC"]!="") {?>
      <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
    <?} else {?>
		  <img src="/bitrix/templates/index/template/img/no_photo.png" alt="">
    <?}?>
	</a>
	<div class="price-block">
		<span class="price">

<!-- ********* ОТКЛЮЧЕНА ЦЕНА
Цена: <span><?/*=$arItem["PRICES"]["Розничные"]["PRINT_VALUE"]*/?></span>
-->
<!-- включен блок -->
			<span class="uznacen">Узнать цену</span>

		</span>
		<span class="article">
			Артикул: <span><?=$arItem["PROPERTIES"]["ARTICLE"]["VALUE"]?></span>
		</span>
	</div>
	<? if($arItem["PRICES"]["Розничные"]["PRINT_VALUE"] > 0):  ?>

<!-- ********* ДОБАВЛЕНИЕ В КОРЗИНУ*******
	<span class="btn-buy" data-buy="<?=$arItem["BUY_URL"]?>" data-add="<?=$arItem["ADD_URL"]?>">Добавить в корзину</span>
-->
	<? else: ?>
<!-- ******** ТОЖЕ ПОТОМ ВЕРНУТЬ*****
	<span style="
	display: block;
	height: 44px;
	width: 200px;
	background: #ccc url(/bitrix/components/bitrix/catalog/templates/catalog/bitrix/catalog.section/.default/btn-buy.png) 30px center no-repeat;
	color: #fff;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	line-height: 44px;
	font-size: 16px;
	padding: 0 0 0 40px;
	">Не задана цена</span>
-->
	<? endif; ?>
</div>
<?
}
?>
</div>
<div class="pagi">
  <?if ($arParams["DISPLAY_TOP_PAGER"])
  {
    ?><? echo $arResult["NAV_STRING"]; ?><?
  }?>
</div>
<div class="clear"></div>
<?
if(CModule::IncludeModule("iblock")) {
	$arFilter = Array('IBLOCK_ID'=>$arResult['IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID'=>$arResult['ID']);
	$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
	$ar_result = $db_list->GetNext();
	if (empty($ar_result)) {
		echo '<h2>Cмотрите так же</h2>';
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"catalog",
			array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arResult['IBLOCK_ID'],
				"SECTION_ID" => $arResult["IBLOCK_SECTION_ID"],
				"SECTION_CODE" => $pageCode,
				"CACHE_TYPE" => $arParams["CACHE_TYPE"],
				"CACHE_TIME" => $arParams["CACHE_TIME"],
				"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
				"COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
				"TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
				"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
				"VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
				"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
				"HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
				"ADD_SECTIONS_CHAIN" => "N"
			),
			$component,
			array("HIDE_ICONS" => "Y")
		);
	}
}
?>
<div class="section-description">
<? echo $arResult["DESCRIPTION"]?>
</div>
<div id="pop_up">
    <h2>Товар успешно добавлен в корзину!</h2>
    <a class="close">X</a>
    <a class="buy-add" id="data-buy" href="">Перейти в корзину</a>
    <a class="buy-add" id="data-add" href="">Продолжить покупки</a>
</div>