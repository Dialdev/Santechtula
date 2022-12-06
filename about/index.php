<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "О компании - магазин сантехники Афоня");
$APPLICATION->SetTitle("О компании");
?><div class="about">
<div class="about__img">
 <a href="/bitrix/templates/index/template/img/o-nas-2.jpg" class="lb"><img src="/bitrix/templates/index/template/img/o-nas-2.jpg" class="img_o_kompanii"></a>
</div>
<div class="about__text">
<h1 class="h2 about__h2_left">О компании</h1>
<p>
 <span style="color: #b60606;"><b>Добро пожаловать в наш интернет-магазин сантехники «Афоня»!</b></span>
</p>
<p>
	 Мы рады каждому посетителю нашего сайта. Наша задача не просто продавать сантехнику, а заработать доверие наших покупателей. Наш ассортимент очень широк, он включает тысячи единиц товара. Наша компания постоянно расширяет свой ассортимент, и планирует занимать новые ниши на рынке. Мы стараемся максимально упростить для наших покупателей процесс покупки сантехники. Избавляем Вас от необходимости искать время на поездку в магазин.
</p>
<p>
 <b>А если у Вас возникнут вопросы относительно товара, доставки или его установки, то стоит только позвонить, и наши специалисты квалифицированно помогут Вам.</b>
</div>
</p>
</div>
<div class="clear">
</div>
<div class="asc-question">
	<div class="asc-question__btn">
		 Задать вопрос
	</div>
	<div class="asc-question__form">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"",
	Array(
		"LIST_URL" => "",
		"WEB_FORM_ID" => 3
	)
);?>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>