<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
/*global $USER;
if($USER->isAdmin()){
     echo "<pre>";
     print_r($arResult);
}*/
?>
<?foreach($arResult["arrAnswers2"] as $answers):?>
    <div class="review-item">
     <?
     // $id = reset($answers[3])['RESULT_ID']; // Получаем id отзыва
     // $key = array_search(array("ID",$id), $arResult['arrResults']); //Получаем ключ отзывам в массиве результатов
     // $unix = strtotime($arResult['arrResults'][$key]['DATE_CREATE']); // Получаем дату создания отзыва в формате UNIX TIMESTAMP
     // $date = date("d.m.Y",$unix); //Форматируем дату в нужный формат
     ?> 
     <div class="review-item__date"><?=$answers["DATE"]?></div>
     <div class="review-item__name"><b>Имя:</b> <?=$answers["NAME"]?></div>
     <div class="review-item_text"><b>Отзыв:</b> <?=$answers["TEXT"]?></div>
 </div>
 <?endforeach;?>