<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(isset($_REQUEST["q"]))
    $q = trim($_REQUEST["q"]);
else
    $q = false;

if(isset($_REQUEST["page"]))
    $page = (int)$_REQUEST["page"];
else
    $page = 0;

if(!CModule::IncludeModule("smedia.yaxmlsearch"))
{
	$this->AbortResultCache();
	ShowError(GetMessage("SMYXS_MODULE_NOT_INSTALLED"));
	return;
}

if (strlen($q) > 0) {
    $arResult = CSmediaYaXmlSearch::Search($q, $page, $arParams);
}

$this->IncludeComponentTemplate();
?>