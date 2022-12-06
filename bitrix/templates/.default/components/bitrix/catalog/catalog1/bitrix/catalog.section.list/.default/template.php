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
<h1 class="h2">Каталог</h1>
<h3 class="h3__attention">Ассортимент постоянно обновляется. Наличие, стоимость товара и сроки доставки уточняйте у нашего менеджера.</h3>
<div class="sections">
	<?foreach ($arResult['SECTIONS'] as &$arSection) {?>
      <div class="item">
      	<a href="<?=$arSection["SECTION_PAGE_URL"]?>">
      		<span class="image">
      			<?
      				if ($arSection["PICTURE"]!="") {?>
      					<img class="preview" src="<?=$arSection["PICTURE"]["SRC"]?>" alt="">
      					<img class="hover" src="<?=CFile::GetPath($arSection["DETAIL_PICTURE"])?>" alt="">
      				<?} else {?>
                <img class="preview" src="/bitrix/templates/index/template/img/no_photo.png" alt="">
                <img class="hover" src="/bitrix/templates/index/template/img/no_photo.png" alt="">
              <?}?>
      		</span>
        	<?=$arSection["NAME"]?>
        </a>
      </div>
    <?}?>
</div>