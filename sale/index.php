<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Акции");
$APPLICATION->SetPageProperty("description", "Акции магазина сантехники Афоня");
$APPLICATION->SetPageProperty("title", "Акции");
$APPLICATION->SetTitle("Акции");
?><?
	GLOBAL $arFilter;
	$arFilter = array(
	'PROPERTY_34' => 17,
	);
?> <?$APPLICATION->IncludeComponent("bitrix:catalog.top", "inner1", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPONENT_TEMPLATE" => "inner",
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
		"ELEMENT_COUNT" => "12",	// Количество выводимых элементов
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"HIDE_NOT_AVAILABLE" => "N",	// Товары, которых нет на складах
		"IBLOCK_ID" => "7",	// Инфоблок
		"IBLOCK_TYPE" => "products",	// Тип инфоблока
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_CART_PROPERTIES" => "",	// Свойства предложений, добавляемые в корзину
		"OFFERS_FIELD_CODE" => array(	// Поля предложений
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
		"OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
		"OFFERS_SORT_ORDER" => "asc",	// Порядок сортировки предложений товара
		"OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => array(	// Тип цены
			0 => "Розничные",
		),
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
		"PROPERTY_CODE" => array(	// Свойства
			0 => "SALE",
			1 => "ARTICLE",
			2 => "",
		),
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"TEMPLATE_THEME" => "blue",
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"VIEW_MODE" => "SECTION"
	),
	false
);?><br>
<p>
	 Чтобы покупки для Вас были еще приятнее и выгоднее, мы собрали в этом разделе самые интересные по цене предложения. Здесь можно купить по акции:
</p>
<p>
	 ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; смесители;
</p>
<p>
	 ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; полотенцесушители;
</p>
<p>
	 ·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; мойки и многое другое.
</p>
<p>
	 При этом можно не сомневаться в качестве акционных изделий - мы предлагаем продукцию проверенных производителей. Список товаров по акции будет пополняться. У нас вы гарантированно купите все необходимое по самой привлекательной цене.
</p>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>