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

<h2 class="section-h2">С этим товаром покупают</h2>
<div class="catalog-section">

<?
foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	$strMainID = $this->GetEditAreaId($arItem['ID']);
?>
<? global $USER;
if ($USER->IsAdmin()) {
// echo "<pre>";
// print_r($arItem["PRICES"]);
}?>
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