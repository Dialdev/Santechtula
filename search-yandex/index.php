<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent("smedia:search.yandexxml", ".default", array(
	"MAX_PASSAGES" => "4",
	"SORT_BY" => "rlv",
	"FILTER" => "none",
	"LINKS_ON_PAGE" => "10",
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>