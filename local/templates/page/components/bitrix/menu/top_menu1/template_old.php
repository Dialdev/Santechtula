<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?if (!empty($arResult)):?>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>


	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<a class="header-menu__link" href="<?=$arItem["LINK"]?><?if ($arItem["SELECTED"]):?> active<?endif?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
				
		<?else:?>
			<a class="header-menu__link" href="<?=$arItem["LINK"]?><?if ($arItem["SELECTED"]):?> active<?endif?>>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
				
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<a class="header-menu__link<?if ($arItem["SELECTED"]):?> active<?endif?>" href="<?=$arItem["LINK"]?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
			<?else:?>
				<a class="header-menu__link<?if ($arItem["SELECTED"]):?> active<?endif?>" href="<?=$arItem["LINK"]?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<a class="header-menu__link<?if ($arItem["SELECTED"]):?> active<?endif?>" href="<?=$arItem["LINK"]?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
			<?else:?>
				<a class="header-menu__link<?if ($arItem["SELECTED"]):?> active<?endif?> " href="<?=$arItem["LINK"]?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>


<?endif?>