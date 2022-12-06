<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?
CModule::IncludeModule('iblock');
$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>"7", "ACTIVE"=>"Y", ">=DATE_CREATE" => $_GET["datatime"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNext())
{?>
 <a href="<?=$ob["DETAIL_PAGE_URL"]?>"><?=$ob["NAME"]?></a>
<?}
?> 