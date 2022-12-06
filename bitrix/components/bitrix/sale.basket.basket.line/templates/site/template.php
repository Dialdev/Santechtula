<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
//echo "<pre>";
//print_r($arResult);
?>

	<?
	if (IntVal($arResult["NUM_PRODUCTS"])>0)
	{
		?>
		<a href="<?=$arParams["PATH_TO_BASKET"]?>">
		<div class="header-basket">
			Корзина
			<i class="header-basket__number">товаров: <?=$arResult["PRODUCT_COUNT"];?></i>
		</div>
</a>		

	<?}
	else
	{
		?>		
<div class="header-basket">
			Корзина
			<i class="header-basket__number">нет товаров</i>
		</div>
			
				<?
	}
	?>