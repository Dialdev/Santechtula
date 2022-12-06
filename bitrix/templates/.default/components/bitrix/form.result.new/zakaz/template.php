<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif?>
<?=$arResult["FORM_HEADER"]?>
<?foreach ($arResult["QUESTIONS"] as $arQuestion):?>
	<?if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"]=='text'):?>
		<input type="text" class="form__text inpt<?=$arQuestion["STRUCTURE"][0]["ID"]?>" name="form_text_<?=$arQuestion["STRUCTURE"][0]["ID"]?>" placeholder="<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?> *<?endif?>" <?if ($arQuestion["REQUIRED"] == "Y"):?>required<?endif?>>
	<?elseif ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"]=='textarea'):?>
		<textarea class="form__textarea" name="form_textarea_<?=$arQuestion["STRUCTURE"][0]["ID"]?>" placeholder="<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?> *<?endif?>" <?if ($arQuestion["REQUIRED"] == "Y"):?>required<?endif?>></textarea>
	<?endif?>
<?endforeach;?>
<div class="form__required">* - поля обязательные к заполнению</div>
<input type="submit" class="form__submit" name="web_form_submit" value="Отправить">
<?=$arResult["FORM_FOOTER"]?>