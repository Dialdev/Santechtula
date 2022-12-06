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
?>
<?foreach($arResult["ITEMS"] as $key => $arItem):
	 //echo "<pre>";
	 //print_r($arItem)
?>
	<div class="block-tovar">
  <?if ($arItem["DISPLAY_PROPERTIES"]["NEW"]["VALUE"]!="") {?>
    <span class="new">New</span>
  <?}?>
  <?if ($arItem["PROPERTIES"]["STOCK"]["VALUE"]!="") {?>
    <span class="stock-ico"><img src="/bitrix/templates/index/images/stock.png"></span>
  <?}?>
  <div class="icon">
      <?if ($arItem["PROPERTIES"]["QUALITY"]["VALUE"]!="") {?>
        <span class="ico">
          <img src="/bitrix/components/bitrix/catalog/templates/tdsk/bitrix/catalog.section/.default/images/ico1a.png">
          <span class="info">Гарантия качества</span>
        </span>
      <?}?>
      <?if ($arItem["PROPERTIES"]["BEST_PRICE"]["VALUE"]!="") {?>
        <span class="ico">
          <img src="/bitrix/components/bitrix/catalog/templates/tdsk/bitrix/catalog.section/.default/images/ico2a.png">
          <span class="info">Лучшая цена</span>
        </span>
      <?}?>
      <?if ($arItem["PROPERTIES"]["RECOMMEND_ICON"]["VALUE"]!="") {?>
        <span class="ico">
          <img src="/bitrix/components/bitrix/catalog/templates/tdsk/bitrix/catalog.section/.default/images/ico3a.png">
          <span class="info">Рекомендуем</span>
        </span>
      <?}?>
      <?if ($arItem["PROPERTIES"]["PICKUP"]["VALUE"]!="") {?>
        <span class="ico">
          <img src="/bitrix/components/bitrix/catalog/templates/tdsk/bitrix/catalog.section/.default/images/ico4a.png">
          <span class="info">Самовывоз</span>
        </span>
      <?}?>
    </div>
    <div class="image">
      <a href="<? if($arItem["PROPERTIES"]["LINK_ADDRESS"]["~VALUE"]!=""){ 
	  echo $arItem["PROPERTIES"]["LINK_ADDRESS"]["~VALUE"];
		} else { 
	  echo $arItem["DETAIL_PAGE_URL"];}?>">
        <? if ($arItem["DETAIL_PICTURE"]["SRC"]) {?>
          <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
        <?} else {?>
          <img src="/bitrix/templates/index/images/no_photo.png">
        <?}?>
      </a>
    </div>
    <a class="title" href="<? if($arItem["PROPERTIES"]["LINK_ADDRESS"]["~VALUE"]!=""){ 
	  echo $arItem["PROPERTIES"]["LINK_ADDRESS"]["~VALUE"];
		} else { 
	  echo $arItem["DETAIL_PAGE_URL"];}?>"><?=$arItem["NAME"]?></a>
    
	<? if($arItem["PROPERTIES"]["LINK_ADDRESS"]["~VALUE"]==""){?>
		<div class="price">
		  <?=$arItem["PRICES"]["BASE"]["VALUE"]?> <span class="ruble">Р</span>
		</div>
	<?}?>    
    <a class="buy" data-buy="<?=$arItem["BUY_URL"]?>" data-add="<?=$arItem["ADD_URL"]?>" href="<? if($arItem["PROPERTIES"]["LINK_ADDRESS"]["~VALUE"]!=""){ 
	  echo $arItem["PROPERTIES"]["LINK_ADDRESS"]["~VALUE"];
		} else { 
	  echo $arItem["DETAIL_PAGE_URL"];}?>">Подробнее</a>
  </div>
<?
endforeach;
?>
