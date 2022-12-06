<?
AddEventHandler("sale", "OnOrderNewSendEmail", "bxModifySaleMails");
function bxModifySaleMails($orderID, &$eventName, &$arFields)
{
  $arOrder = CSaleOrder::GetByID($orderID);
  //-- получаем телефоны и адрес
  $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);
  $phone="";
  $index = ""; 
  $country_name = "";
  $city_name = "";  
  $address = "";
  while ($arProps = $order_props->Fetch()) {
    if ($arProps["CODE"] == "PHONE") {
      $phone = htmlspecialchars($arProps["VALUE"]);
    }
    if ($arProps["CODE"] == "LOCATION") {
        $arLocs = CSaleLocation::GetByID($arProps["VALUE"]);
        $country_name =  $arLocs["COUNTRY_NAME_ORIG"];
        $city_name = $arLocs["CITY_NAME_ORIG"];
    }
    if ($arProps["CODE"] == "INDEX") {
      $index = $arProps["VALUE"];   
    }
    if ($arProps["CODE"] == "ADRESS") {
      $address = $arProps["VALUE"];
    }
  }
  $full_address = $index." ".$country_name." - ".$city_name." ".$address;
  //-- получаем название службы доставки
  $arDeliv = CSaleDelivery::GetByID($arOrder["DELIVERY_ID"]);
  $delivery_name = "";
  if ($arDeliv) {
    $delivery_name = $arDeliv["NAME"];
  }
  //-- получаем название платежной системы   
  $arPaySystem = CSalePaySystem::GetByID($arOrder["PAY_SYSTEM_ID"]);
  $pay_system_name = "";
  if ($arPaySystem) {
    $pay_system_name = $arPaySystem["NAME"];
  }
  //-- добавляем новые поля в массив результатов
  $arFields["ORDER_DESCRIPTION"] = $arOrder["USER_DESCRIPTION"]; 
  $arFields["PHONE"] =  $phone;
  $arFields["DELIVERY_NAME"] =  $delivery_name;
  $arFields["PAY_SYSTEM_NAME"] =  $pay_system_name;
  $arFields["FULL_ADDRESS"] = $full_address;   
}

AddEventHandler('main', 'OnEpilog', 'Check404Error', 1);

function Check404Error(){
    if (defined('ERROR_404') && ERROR_404 == 'Y') {
		global $USER;
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/header.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/404.php';
        include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/footer.php';
    }
}

AddEventHandler('main', 'OnEpilog' , array('CMainHandlers', 'OnEpilogHandler'));  
class CMainHandlers { 
   function OnEpilogHandler() {
      
      $page = ' - Страница ';
      if (isset($_GET['PAGEN_1']) && intval($_GET['PAGEN_1'])>0) 
      {
         $title = $GLOBALS['APPLICATION']->GetTitle();
         $GLOBALS['APPLICATION']->SetPageProperty('title', $title.$page.intval($_GET['PAGEN_1']));
         $GLOBALS['APPLICATION']->SetTitle($title.' – Страница '.intval($_GET['PAGEN_1']));
         $description = $GLOBALS['APPLICATION']->GetProperty("description");
         $GLOBALS['APPLICATION']->SetPageProperty('description', $description.$page.intval($_GET['PAGEN_1']));
      }
      elseif (isset($_GET['PAGEN_2']) && intval($_GET['PAGEN_2'])>0)
       {
         $title = $GLOBALS['APPLICATION']->GetTitle();
         $GLOBALS['APPLICATION']->SetPageProperty('title', $title.$page.intval($_GET['PAGEN_2']));
         $description = $GLOBALS['APPLICATION']->GetProperty("description");
         $GLOBALS['APPLICATION']->SetPageProperty('description', $description.$page.intval($_GET['PAGEN_2']));
        }
   }
}