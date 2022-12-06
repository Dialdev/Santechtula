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
<div class="index-catalog-scroll">
<?foreach($arResult["ITEMS"] as $key => $arItem) {
//echo "<pre>";
//print_r($arItem);
?>
<? 
$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter = Array("IBLOCK_ID"=>"7", "ID"=>$arItem["IBLOCK_SECTION_ID"]), true,$arSelect=Array("NAME"));?>

	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="catalog-item">
		<span class="catalog-item__img"><img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt=""></span>
		<div class="catalog-item__info">
			<div class="catalog-item__middle">
				<h4 class="catalog-item__title">
					<?while($ar_result = $db_list->GetNext()):?> 
						<?=$ar_result["NAME"];?> 
					<?endwhile?>
				</h4>
				<p class="catalog-item__dop"><?=$arItem["NAME"]?></p>
				<span class="catalog-item__price">Цена: <b class="catalog-item__number"><?=$arItem["PRICES"]["Розничные"]["VALUE"]?></b> руб.</span>
				<b class="catalog-item__more">Подробнее</b>
			</div>
		</div>
	</a>
<?}?>
</div>