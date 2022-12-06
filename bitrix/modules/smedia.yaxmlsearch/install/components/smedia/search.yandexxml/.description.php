<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => GetMessage("SMEDIA_YAXMLSEARCH_NAME"),
    "DESCRIPTION" => GetMessage("SMEDIA_YAXMLSEARCH_DESCRIPTION"),
    "ICON" => "/images/icon.gif",
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "utility",
        "CHILD" => array(
            "ID" => "search",
            "NAME" => GetMessage("SEARCH_SERVICE")
        )
    ),
);

?>