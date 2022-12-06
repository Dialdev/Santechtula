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
//echo "<pre>";
//print_r($arResult);
?>

<?if (count($arResult['ITEMS'])>0):?>
<div class="catalog-section">
<?
foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
?>
	<div class="tovar">
		<div class="icon">
			<?if($arItem["PROPERTIES"]["SALE"]["VALUE"]!=""):?>
				<span class="red"><?=$arItem["PROPERTIES"]["SALE"]["VALUE"]?>%</span>
			<?endif;?>
			<?if($arItem["PROPERTIES"]["HIT"]["VALUE"]!=""):?>
				<span>Хит!</span>
			<?endif;?>
		</div>
			<a href="<? echo $arItem['DETAIL_PAGE_URL']; ?>">
			<div class="image">
				<?if ($arItem["DETAIL_PICTURE"]["SRC"]!="") {?>
                  <img alt="<?=$arItem['NAME']?>" title="<?=$arItem['NAME']?>" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
                <?} else {?>
                    <img alt="<?=$arItem['NAME']?>" title="<?=$arItem['NAME']?>" src="/bitrix/templates/index/images/no_photo.png">
                  <?}
                ?>
			</div>
			<span class="title">
				<?=$arItem["NAME"]?>
			</span>
		</a>
		<div class="price">
			Цена: <?if($arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]!=""):?><span class="old"><?=$arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]?></span><?endif;?><span><b><?=$arItem["PRICES"]["BASE"]["VALUE"]?></b> рубл. </span>
		</div>
		<a class="about" href="<? echo $arItem['DETAIL_PAGE_URL']; ?>">Подробнее</a>
	</div>
<?}?>
</div>
<?endif;?>