<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket",
	"site",
	Array(
		"ACTION_VARIABLE" => "action",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AUTO_CALCULATION" => "Y",
		"COLUMNS_LIST" => array("NAME","PROPS","DELETE","PRICE","QUANTITY","SUM"),
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "Y",
		"OFFERS_PROPS" => array(),
		"PATH_TO_ORDER" => "/personal/order/make/",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"QUANTITY_FLOAT" => "N",
		"SET_TITLE" => "Y",
		"TEMPLATE_THEME" => "blue",
		"USE_GIFTS" => "Y",
		"USE_PREPAYMENT" => "N"
	)
);?>

<h3 class="h3_dostavka"></h3>
<div>
 <b>Ассортимент постоянно обновляется. Наличие, стоимость товара и сроки доставки уточняйте у нашего менеджера.<br>
 </b><b><br>
 </b>
</div>
<h3 class="h3_dostavka"><span style="color: #b60606;">Как заказать?</span></h3>
<p>
	 Ежедневно в любое время на сайте в разделе <a href="/catalog/"><b><span style="color: #b60606;">КАТАЛОГ</span></b></a> или с <b>09:00 до 17:00</b> по телефонам <b>+7 (4872) 58-74-50</b><b>.</b>
</p>
<h3 class="h3_dostavka"><span style="color: #b60606;">Условия доставки.</span></h3>
<p>
	 При покупке ванны, доставка по Туле <b>БЕСПЛАТНО!</b><br>
	 Бесплатная доставка по Туле при заказе от <b>15 000 рублей</b>.<br>
	 Стоимость доставки рассчитывается по телефону +7 (4872) 58-74-50<br>
	 Стоимость доставки по городу от 100р
</p>
<h3 class="h3_dostavka"> <b><span style="color: #b60606;">Как оплатить?</span></b> </h3>
 <!--p>
	Наличными или банковской картой.
</p-->
<ul>
	<li>Оплата картой возможна при самовывозе</li>
	<li>Оплата наличными при получении товара</li>
</ul>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>