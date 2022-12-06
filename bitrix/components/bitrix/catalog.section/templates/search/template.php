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
<h2 class="section-h2"><?=$arResult["NAME"]?></h2>
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
	<a class="title" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<?=$arItem["NAME"]?>
	</a>
	<a class="picture" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
	</a>
	<div class="price-block">
		<span class="price">
			Цена: <span><?=$arItem["PRICES"]["Розничные"]["PRINT_VALUE"]?></span>
		</span>
		<span class="article">
			Артикул: <span><?=$arItem["PROPERTIES"]["ARTICLE"]["VALUE"]?></span>
		</span>
	</div>
	<span class="btn-buy" data-buy="<?=$arItem["BUY_URL"]?>" data-add="<?=$arItem["ADD_URL"]?>">Добавить в корзину</span>
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
<div id="pop_up">
    <h2>Товар успешно добавлен в корзину!</h2>
    <a class="close">X</a>
    <a class="buy-add" id="data-buy" href="">Перейти в корзину</a>
    <a class="buy-add" id="data-add" href="">Продолжить покупки</a>
</div>  