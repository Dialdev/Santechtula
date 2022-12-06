<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
?><div class="cabinet">
	<h1>Личный кабинет</h1>
	<p>
		В личном кабинете Вы можете проверить текущее состояние корзины, ход выполнения Ваших заказов, просмотреть или изменить личную информацию, а также подписаться на новости и другие информационные рассылки.
	</p>
 <a href="profile/">Личная информация</a> <a href="order/">Мои заказы</a> <a href="cart/">Моя корзина</a> <a href="subscribe/">Моя подписка</a>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>