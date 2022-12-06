<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
foreach ($arResult['arrResults'] as $STATUS_ID){
	foreach ($arResult['arrAnswers'] as $key => $aNswers){
		
		if ($STATUS_ID['STATUS_ID'] == '3' && $STATUS_ID['ID'] == $key)
		{
			$unix = strtotime(reset($aNswers[11])["USER_TEXT"]); // Получаем дату создания отзыва в формате UNIX TIMESTAMP
			$date = date("d.m.Y",$unix); //Форматируем дату в нужный формат
			$arResult["arrAnswers2"][reset($aNswers[11])["USER_TEXT"]]['NAME'] = $aNswers[3][3]['USER_TEXT'];
			$arResult["arrAnswers2"][reset($aNswers[11])["USER_TEXT"]]['TEXT'] = $aNswers[5][5]['USER_TEXT'];
			$arResult["arrAnswers2"][reset($aNswers[11])["USER_TEXT"]]['DATE'] = $date;
		}
	}
}
function mysort($a, $b) {
    return strtotime($b['DATE']) - strtotime($a['DATE']);
}
usort($arResult["arrAnswers2"], 'mysort');
?>
