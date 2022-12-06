<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="yandex-search">
<?//echo "<pre>"; print_r($arResult["PAGINATION"]); echo "</pre>";?>
<form action="" method="get">
    <input type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
    &nbsp;<input type="submit" value="<?=GetMessage("SEARCH_GO")?>" />
</form><br />

<?if(isset($arResult["ERROR"])){?>
    <?ShowError($arResult["ERROR"]["TEXT"]);?>
<?}elseif(!empty($arResult["RESULTS"])){?>
    <p class="ya-logo"><img src="/bitrix/components/smedia/search.yandexxml/templates/.default/images/yandex-logo.png" alt="яндекс" width="52" height="21" /> <?=$arResult["FOUND_HUMAN"]?></p>
    <ol start="<?=$arResult["OL_START"]?>">
    <?foreach($arResult["RESULTS"] as $arItem){?> 
        <li>
            <p class="title"><a href="<?=$arItem["URL"]?>"><?=$arItem["TITLE"]?></a></p>
            <p><?=$arItem["PASSAGES"]?></p>
            <p class="info"><a href="<?=$arItem["URL"]?>"><?=$arItem["URL"]?></a> &nbsp;&middot;&nbsp; <?=$arItem["SIZE_HUMAN"]?></p>
        </li>
    <?}?>
    </ol>  

<?
if ($_SERVER["REQUEST_METHOD"] =='GET') 
{
	$page  = array_key_exists('page', $_GET)     ? $_GET['page'] : 0;
} 
else $page = 0;

$query = htmlspecialchars($arResult["REQUEST"]["QUERY"]);
$host = htmlspecialchars($arResult["HOST"]);
if ($page != 0) 
	print "<a href='?page=" . ($page - 1) . "&q={$query}'>&#8592; ".GetMessage("PREV") ."</a> ";
print GetMessage("NO") . ($page + 1);


if (($arResult["FOUND_ALL"] - ($page + 1) * $arResult["LINKS_ON_PAGE"])>0) 
	print " <a href='?page="  . ($page + 1)  . "&q=$query'>".GetMessage("NEXT") ." &#8594;</a> ";

}?>
</div>

