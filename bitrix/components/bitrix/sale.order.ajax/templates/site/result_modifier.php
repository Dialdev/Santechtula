<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
    global $USER;
    if (!$USER->IsAuthorized()) {
        $arFields = array(
            "REQUIED" => "N",
        );
    }

    else {
        $arFields = array(
            "REQUIED" => "Y",
        );
    }

    CSaleOrderProps::Update(3, $arFields);

    $arResult['ORDER_PROP']['USER_PROPS_N'][7]['DESCRIPTION'] = $arResult['ORDER_PROP']['USER_PROPS_N'][7]['~DESCRIPTION'];
?>