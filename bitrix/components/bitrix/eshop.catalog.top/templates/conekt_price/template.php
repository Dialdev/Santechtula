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
<div class="files prices-block">
	<h3>Прайс-листы:</h3>
	<?
	foreach ($arResult['ITEMS'] as $key => $arItem)
	{
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	?>
		<b><?=$arItem["NAME"]?>:</b>
		<ul>
					<?foreach ($arItem["PROPERTIES"]["PRICES_LIST"]['VALUE'] as $index => $prices){?>
						<li><a target="_black" href="<?=CFile::GetPath($prices)?>"><?=$arItem["PROPERTIES"]["PRICES_LIST"]['DESCRIPTION'][$index]?></a></li> 
					<?}?>
		</ul><br>
	<?}?>
</div>
<?endif;?>