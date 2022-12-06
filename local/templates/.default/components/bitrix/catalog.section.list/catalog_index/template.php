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

<?if(isset($arResult['SECTIONS']["0"])) {?>
<h2 class="h2">Каталог</h2>

        <div class="content-conveyor ui-helper-clearfix">
        <?$count=0;?>
        	<?foreach ($arResult['SECTIONS'] as &$arSection) { $count++;?>
        		  <?
        		  	CModule::IncludeModule("iblock");
      				$arURL = explode("/", $APPLICATION-> GetCurUri());
        		  	$pageCode = htmlspecialcharsEx($arURL[3]);
        		  ?>
      			

        		<? $section_url=strpos($_SERVER["REQUEST_URI"], $pageCode);?> 
	          <div class="item new_index <?if($pageCode == $arSection["CODE"]) {echo "active";}?>">
	          	<a href="<?=$arSection["SECTION_PAGE_URL"]?>">
	          		<span class="image">
	          			<?
                    if ($arSection["PICTURE"]!="") {?>
                      <img class="preview" src="<?=$arSection["PICTURE"]["SRC"]?>"  alt="">
                      <img class="hover" src="<?=CFile::GetPath($arSection["DETAIL_PICTURE"])?>"  alt="">
                    <?} else {?>
                      <img class="preview" src="/bitrix/templates/index/template/img/no_photo.png"  alt="">
                      <img class="hover" src="/bitrix/templates/index/template/img/no_photo.png"  alt="">
                    <?}?>
	          		</span>
	            	<?=$arSection["NAME"]?>
	            </a>
	          </div>
	        <?}?>

      
    </div>
    <?}?>