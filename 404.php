<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus('404 Not Found');
@define('ERROR_404','Y');

if (strpos(php_sapi_name(),'cgi') !== false) 
    header('Status: 404 Not Found'); 
else 
    header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Ошибка 404. Страница не найдена");
$APPLICATION->SetTitle("404 Страница не найдена");
?><?php
header("HTTP/1.0 404 Not Found");
?>
<h1>Ошибка 404: Страница недоступна или не существует</h1>
<p>Вы можете найти нужный раздел в карте сайте ниже или перейти на <a href="/">главную страницу</a>.</p>
<?
$APPLICATION->IncludeComponent("bitrix:main.map", ".default", array(
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"SET_TITLE" => "Y",
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION" => "Y"
	),
	false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>