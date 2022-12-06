<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="b-header_main_nav-min">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="b-header_main_nav-min_item"><a class="b-header_main_nav-min_link selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="b-header_main_nav-min_item"><a class="b-header_main_nav-min_link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>