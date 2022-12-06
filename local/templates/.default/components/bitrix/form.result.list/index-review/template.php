<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if ($USER->IsAdmin()) {
	 // echo '<pre>';
	 // print_r($arResult);
	 // echo '</pre>';
}?>
<h2 class="h2 news__h2">Отзывы</h2>
<?$i = 0;?>
<?foreach($arResult["arrAnswers2"] as $answers):?>
<!--?$preserved = array_reverse($answers, true);?-->
<?if ($i <= 2):?>
<div class="review-item">
	<div class="review-item__name"><?=$answers["NAME"]?></div>
	<div class="review-item_text"><?=$answers["TEXT"]?></div>
	<a class="review-item__link" href="/reviews/">Подробнее</a>	
</div>
<?$i++;?>
<?endif;?>
<?endforeach;?>
<a href="/reviews/" class="learnmore learnmore_review">Все отзывы</a>
