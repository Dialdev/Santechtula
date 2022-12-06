<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax", 
	"site", 
	array(
		"PAY_FROM_ACCOUNT" => "N",
		"COUNT_DELIVERY_TAX" => "N",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"ALLOW_AUTO_REGISTER" => "Y",
		"SEND_NEW_USER_NOTIFY" => "N",
		"DELIVERY_NO_AJAX" => "N",
		"TEMPLATE_LOCATION" => "popup",
		"PROP_1" => array(
		),
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_PERSONAL" => "/personal/order/",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_ORDER" => "/personal/order/make/",
		"SET_TITLE" => "Y",
		"DELIVERY2PAY_SYSTEM" => "",
		"SHOW_ACCOUNT_NUMBER" => "Y",
		"DELIVERY_NO_SESSION" => "N",
		"DELIVERY_TO_PAYSYSTEM" => "d2p",
		"USE_PREPAYMENT" => "N",
		"PROP_2" => "",
		"ALLOW_NEW_PROFILE" => "N",
		"SHOW_PAYMENT_SERVICES_NAMES" => "Y",
		"SHOW_STORES_IMAGES" => "N",
		"PATH_TO_AUTH" => "/auth/",
		"DISABLE_BASKET_REDIRECT" => "N",
		"PRODUCT_COLUMNS" => array(
		),
		"COMPONENT_TEMPLATE" => "site"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>