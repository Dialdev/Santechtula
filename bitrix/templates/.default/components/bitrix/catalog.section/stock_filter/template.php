<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?
$name_section = $_GET['manufacturer'];
?>
<? if (count($arResult['ITEMS'])>0) { ?>

<div class="sale_filter_prop">
	<!--span class="sale_filter_prop_name">Производители:</span-->
	<div class="sale_filter_block" tabindex="5000" style="margin-bottom: 20px;">

<?
$brand = array();
$i = 0;
$samilar_brand = 0;
foreach ($arResult['ITEMS'] as $key => $arItem){
	if ($i == 0) {
		$brand[$i]["NAME"] = $arItem["PROPERTIES"]["HYDROMASSAGE"]["VALUE"];
		$brand[$i]["ID"] = $arItem["PROPERTIES"]["HYDROMASSAGE"]["VALUE_XML_ID"];
		$i++;
	} else {
		foreach ($brand as $key => $brand_s){
			if ($brand_s["NAME"] == $arItem["PROPERTIES"]["HYDROMASSAGE"]["VALUE"]) {
				$samilar_brand = 1;
				break;
			} else {
				$samilar_brand = 0;
			}
		}
		if ($samilar_brand == 0) {
			$brand[$i]["NAME"] = $arItem["PROPERTIES"]["HYDROMASSAGE"]["VALUE"];
			$brand[$i]["ID"] = $arItem["PROPERTIES"]["HYDROMASSAGE"]["VALUE_XML_ID"];
			$i++;
		}
	}
}

// echo "<pre>";
// print_r($brand);
// echo "</pre>";

foreach ($brand as $key => $arBrand){
	if ($arBrand["NAME"]) {?>
		<a href="<?=$_SERVER["REQUEST_URI"]?>?&hidromassage=<?=$arBrand["NAME"]?>" class="sale-filter__link" ><?=$arBrand["NAME"]?></a>
	<?}
}?>

	</div>
</div>

<?}?>