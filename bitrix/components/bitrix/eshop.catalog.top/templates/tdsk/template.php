<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="catalog-section">


<?foreach($arResult["ITEMS"] as $key => $arItem):
//echo "<pre>";
//print_r($arItem)
?>
<div class="catalog_item">      
      <div class="image">
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
          <?
          if($arItem["DETAIL_PICTURE"]["SRC"]!="") {
            ?>
            <img alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
          <?} else {?>
            <img alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" src="/bitrix/templates/index/images/no_photo.png">
          <?}?>
        </a>
      </div>
      <a class="title" href="<? echo $arItem['DETAIL_PAGE_URL']; ?>" title="<?=$arItem["NAME"]?>"><?=$arItem["NAME"]?></a>
      <?if ($arItem["PROPERTIES"]["SPECS"]["VALUE"]!="") {?>        
        <!--<table class="specs">
        <?
        $counter = count($arItem["PROPERTIES"]["SPECS"]["VALUE"]);
        for ($i=0; $i<$counter; $i++) {?>
        <tr> 
            <td class="name"><?=$arItem["PROPERTIES"]["SPECS"]["VALUE"][$i];?></td>
            <td><?=$arItem["PROPERTIES"]["SPECS"]["DESCRIPTION"][$i];?></td>
        </tr>
        <?}
        ?>
        </table>-->
        <? }?> 
      <div class="price">
        <?
      if($arItem["PROPERTIES"]['OLD_PRICE']['VALUE']!="") {
            ?>
            <s><?=$arItem["PROPERTIES"]['OLD_PRICE']['VALUE']?></s> рубл. <br>
          <?} else {?>
            <s></s>
      <?}?>
        <span><?=$arItem["PROPERTIES"]['PRICE']['VALUE']?></span> рубл.
      </div>
      <a href="<? echo $arItem['DETAIL_PAGE_URL']; ?>" class="more">Подробнее</a> 
      <?
      $showSubscribeBtn = false;
      $compareBtnMessage = ($arParams['MESS_BTN_COMPARE'] != '' ? $arParams['MESS_BTN_COMPARE'] : GetMessage('CT_BCS_TPL_MESS_BTN_COMPARE'));
      
      if (!isset($arItem['OFFERS']) || empty($arItem['OFFERS']))
      {?>
        <?$emptyProductProperties = empty($arItem['PRODUCT_PROPERTIES']);?>
        
        <?
        $arJSParams = array(
          'PRODUCT_TYPE' => $arItem['CATALOG_TYPE'],
          'SHOW_QUANTITY' => ($arParams['USE_PRODUCT_QUANTITY'] == 'Y'),
          'SHOW_ADD_BASKET_BTN' => false,
          'SHOW_BUY_BTN' => true,
          'SHOW_ABSENT' => true,
          'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
          'SHOW_CLOSE_POPUP' => ($arParams['SHOW_CLOSE_POPUP'] == 'Y'),
          'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
          'PRODUCT' => array(
            'ID' => $arItem['ID'],
            'NAME' => $productTitle,
            'PICT' => ('Y' == $arItem['SECOND_PICT'] ? $arItem['PREVIEW_PICTURE_SECOND'] : $arItem['PREVIEW_PICTURE']),
            'CAN_BUY' => $arItem["CAN_BUY"],
            'SUBSCRIPTION' => ('Y' == $arItem['CATALOG_SUBSCRIPTION']),
            'CHECK_QUANTITY' => $arItem['CHECK_QUANTITY'],
            'MAX_QUANTITY' => $arItem['CATALOG_QUANTITY'],
            'STEP_QUANTITY' => $arItem['CATALOG_MEASURE_RATIO'],
            'QUANTITY_FLOAT' => is_double($arItem['CATALOG_MEASURE_RATIO']),
            'SUBSCRIBE_URL' => $arItem['~SUBSCRIBE_URL'],
            'BASIS_PRICE' => $arItem['MIN_BASIS_PRICE']
          ),
          'BASKET' => array(
            'ADD_PROPS' => ('Y' == $arParams['ADD_PROPERTIES_TO_BASKET']),
            'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
            'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
            'EMPTY_PROPS' => $emptyProductProperties,
            'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
            'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
          ),
          'VISUAL' => array(
            'ID' => $arItemIDs['ID'],
            'PICT_ID' => ('Y' == $arItem['SECOND_PICT'] ? $arItemIDs['SECOND_PICT'] : $arItemIDs['PICT']),
            'QUANTITY_ID' => $arItemIDs['QUANTITY'],
            'QUANTITY_UP_ID' => $arItemIDs['QUANTITY_UP'],
            'QUANTITY_DOWN_ID' => $arItemIDs['QUANTITY_DOWN'],
            'PRICE_ID' => $arItemIDs['PRICE'],
            'BUY_ID' => $arItemIDs['BUY_LINK'],
            'BASKET_PROP_DIV' => $arItemIDs['BASKET_PROP_DIV'],
            'BASKET_ACTIONS_ID' => $arItemIDs['BASKET_ACTIONS'],
            'NOT_AVAILABLE_MESS' => $arItemIDs['NOT_AVAILABLE_MESS'],
            'COMPARE_LINK_ID' => $arItemIDs['COMPARE_LINK']
          ),
          'LAST_ELEMENT' => $arItem['LAST_ELEMENT']
        );
        ?>

        <?
          unset($emptyProductProperties);
        ?>
      <?}?>
    </div>
	
<?
endforeach;
?>

</div>