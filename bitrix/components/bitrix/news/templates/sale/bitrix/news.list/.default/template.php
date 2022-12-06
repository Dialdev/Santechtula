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
<div class="sale-page">
	<h2 class="h2">Акции</h2>
				
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="sale-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
			<div class="sale-item__img">
				<?if($arItem["PREVIEW_PICTURE"]["SRC"]!="") {?>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
				<?} else {?>
					<img src="/bitrix/components/bitrix/news/templates/sale/bitrix/news.list/.default/sale-no.jpg" alt="">
				<?}?>
			</div>
		</a>
		<span class="sale-item__date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="sale-item__title"><?=$arItem["NAME"]?></a>
		<p><?echo $arItem["PREVIEW_TEXT"];?></p>
	</div>
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<div class="pagi"><?=$arResult["NAV_STRING"]?></div>
<?endif;?>	
