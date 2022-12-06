<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if (!empty($arResult)):?>
<ul>

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li <?if ($arItem["SELECTED"]):?>class="active"<?endif?>>
				<a class="header-menu__link" href="<?=$arItem["LINK"]?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="active"<?endif?>>
			<a class="header-menu__link" href="<?=$arItem["LINK"]?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if ($arItem["SELECTED"]){?>class="active"<?}?>>
					<a class="header-menu__link" href="<?=$arItem["LINK"]?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
				</li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="active"<?endif?>>
					<a class="header-menu__link" href="<?=$arItem["LINK"]?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
				</li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if ($arItem["SELECTED"]){?>class="active"<?}?>>
					<a class="header-menu__link" href="<?=$arItem["LINK"]?><?if ($arItem["SELECTED"]):?> active<?endif?>" ><span data-hover="<?=$arItem["TEXT"]?>"><?=$arItem["TEXT"]?></span></a>
				</li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><span><?=$arItem["TEXT"]?></span></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>