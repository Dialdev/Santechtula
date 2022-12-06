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
<script type="text/javascript">
	$(function() {
    var conveyor = $(".content-conveyor", $("#sliderContent")),
    item = $(".item", $("#sliderContent"));
    conveyor.css("width", item.length * 126);
      var sliderOpts = {
    max: (item.length * 126) - parseInt($(".viewer", $("#sliderContent")).css("width")),
    slide: function(e, ui) { 
        conveyor.css("left", "-" + ui.value + "px");
        }
      };
      $("#slider").slider(sliderOpts);
    });
</script>
<?if(isset($arResult['SECTIONS']["0"])) {?>
<?/*<h2 class="h2">Каталог</h2>*/?>
 <div id="sliderContent" class="ui-corner-all">
      <div class="viewer ui-corner-all">
        <div class="content-conveyor ui-helper-clearfix">123
        <?$count=0;?>
        	<?foreach ($arResult['SECTIONS'] as &$arSection) { $count++;?>
        		  <?
        		  	CModule::IncludeModule("iblock");
      				$arURL = explode("/", $APPLICATION-> GetCurUri());
        		  	$pageCode = htmlspecialcharsEx($arURL[3]);
        		  ?>
      			

        		<? $section_url=strpos($_SERVER["REQUEST_URI"], $pageCode);?> 
	          <div class="item <?if($pageCode == $arSection["CODE"]) {echo "active";}?>">
	          	<a href="<?=$arSection["SECTION_PAGE_URL"]?>">`12
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
      </div>
      <?if($count>8){?><div class="projects__scroll-wrapper">
      	<div id="slider"></div>
      </div>
      <?}?>
    </div>
    <?}?>