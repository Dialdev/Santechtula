<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Настройки пользователя");
?>
<h1>Профиль</h1>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"tdsk",
	Array(
		"SET_TITLE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"USER_PROPERTY" => array(),
		"SEND_INFO" => "N",
		"CHECK_RIGHTS" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>