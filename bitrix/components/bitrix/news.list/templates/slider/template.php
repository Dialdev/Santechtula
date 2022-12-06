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
<?

// echo "<pre>";
// print_r($arResult);

?>
<div class="banner-block">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

		<div class="banner-block__item banner_item_<?=$arItem['ID']?>" style="background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
			<?if($arItem['PREVIEW_TEXT'] != '') {?>
				<div class="banner-block__text"><?=$arItem['PREVIEW_TEXT']?></div>
				<?if($arItem["PROPERTIES"]["LINK"]["VALUE"] != '') {?>
				<a class="banner-block__link" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">Подробнее</a>
				<?}?>
			<?}?>
		</div>

	<?endforeach;?>
</div>