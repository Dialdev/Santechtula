<div class="call-back-form">
 <span class="close">x</span>
	<span class="h2_style">Заказать обратный звонок</span>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"call-back",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "result_edit.php",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
		"WEB_FORM_ID" => "1"
	)
);?>
</div>
 <?if ($_GET['formresult']=='addok'):?>
<div class="popup_success">
 <span class="close">x</span>
	<h2>Заявка принята</h2>
	<p>
		 В ближайшее время с Вами свяжется наш менеджер
	</p>
</div>
<?endif?>