<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
<h1>Редактирование подписки на рассылку</h1>
<?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.edit",
	"tdsk",
	Array(
		"SHOW_HIDDEN" => "N",
		"ALLOW_ANONYMOUS" => "Y",
		"SHOW_AUTH_LINKS" => "Y",
		"CACHE_TIME" => "36000000",
		"SET_TITLE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>