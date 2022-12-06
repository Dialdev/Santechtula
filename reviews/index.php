<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Отзывы");
$APPLICATION->SetPageProperty("description", "Отзывы о магазине сантехники Афоня");
$APPLICATION->SetTitle("Отзывы");
?><h1 class="h2">Отзывы</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.list",
	"",
	Array(
		"WEB_FORM_ID" => 2
	)
);?>
<div class="form">
	<h4 class="review-h4">Оставить отзыв</h4>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"",
	Array(
		"LIST_URL" => "",
		"WEB_FORM_ID" => 2
	)
);?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>