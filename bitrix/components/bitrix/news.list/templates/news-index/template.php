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
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
			<div class="news-item__img">
				<?if($arItem["PREVIEW_PICTURE"]["SRC"]!="") {?>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
				<?} else {?>
					<img src="/bitrix/templates/index/template/img/service/img6.jpg" alt="">
				<?}?>
				<span class="news-item__date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
			</div>
		</a>
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news-item__title"><?=$arItem["NAME"]?></a>
		<p><?echo $arItem["PREVIEW_TEXT"];?></p>
	</div>
<?endforeach;?>