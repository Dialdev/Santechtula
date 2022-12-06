<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>



	<?
	if (IntVal($arResult["NUM_PRODUCTS"])>0)
	{
		?>
		<a href="<?=$arParams["PATH_TO_BASKET"]?>">
		<div class="header-basket">
			Корзина
			<i class="header-basket__number"><?=$arResult["PRODUCTS"];?></i>
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