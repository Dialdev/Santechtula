<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?
CModule::IncludeModule('iblock');
$arFilter = array('IBLOCK_ID' => "7", "ACTIVE" => "Y", ">=DATE_CREATE" => $_GET["datatime"]); 
$rsSect = CIBlockSection::GetList(array("created"),$arFilter, false, array("ID", "DATE_CREATE", "NAME", "SECTION_PAGE_URL", "ACTIVE"));
while ($arSect = $rsSect->GetNext())
{?>
	<a href="<?=$arSect["SECTION_PAGE_URL"]?>"><?=$arSect["NAME"]?></a>
<?}
?>