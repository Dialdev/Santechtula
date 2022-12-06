<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//echo "<pre>";
//print_r($arResult);
?><?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif?>
<?=$arResult["FORM_HEADER"]?>
<?foreach ($arResult["QUESTIONS"] as $arQuestion):
//echo "<pre>";
//print_r($arQuestion);
?>
	<?if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"]=='text'):?>
		<input type="<?if($arQuestion["STRUCTURE"][0]["ID"]==5 || $arQuestion["STRUCTURE"][0]["ID"]==6){ echo "hidden"; } else {echo "text";}?>" class="feedback__input" name="form_text_<?=$arQuestion["STRUCTURE"][0]["ID"]?>" id="form__text_<?=$arQuestion["STRUCTURE"][0]["ID"]?>" placeholder="<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?> *<?endif?>" <?if ($arQuestion["REQUIRED"] == "Y"):?>required<?endif?> value="">
<?elseif ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"]=='textarea'):?>

		<textarea class="form__textarea" name="form_textarea_<?=$arQuestion["STRUCTURE"][0]["ID"]?>" placeholder="<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?> *<?endif?>" <?if ($arQuestion["REQUIRED"] == "Y"):?>required<?endif?>></textarea>
<?endif?>
<?endforeach;?>
<input type="submit" class="feedback__button" name="web_form_submit" value="Отправить">
<p style="    margin-top: 10px;
    text-align: center;"><input type="checkbox" required> Согласен с <a href="/upload/polit.pdf" target="_blank">правилами обработки персональных данных </a></p><?=$arResult["FORM_FOOTER"]?>