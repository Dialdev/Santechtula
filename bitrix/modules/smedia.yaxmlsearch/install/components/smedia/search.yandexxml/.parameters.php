<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(!CModule::IncludeModule("smedia.yaxmlsearch"))
	return;

$arParams["CACHE_TIME"] = Array(
	"PARENT" => "BASE",
	"NAME" => GetMessage("SMYXS_P_CACHE_TIME"),
	"DEFAULT" => "3600",
);

$arComponentParameters = array(
    "GROUPS" => array(
        "SEARCH_PARAMS" => array(
            "NAME" => GetMessage("SMYXS_G_SEARCH"),
        ),
    ),
    "PARAMETERS" => array(
        "MAX_PASSAGES" => array(
            "PARENT" => "SEARCH_PARAMS",
            "NAME" => GetMessage("SMYXS_P_MAX_PASSAGES"),
            "TYPE" => "LIST",
            "VALUES" => array(
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
            ),
            "DEFAULT" => 2,
        ),
        "SORT_BY" => array(
            "PARENT" => "SEARCH_PARAMS",
            "NAME" => GetMessage("SMYXS_P_SORT_BY"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "rlv" => GetMessage("SMYXS_P_SORT_BY_RLV"),
                "tm" => GetMessage("SMYXS_P_SORT_BY_TM"),
            ),
            "DEFAULT" => "rlv",
        ),
        "FILTER" => array(
            "PARENT" => "SEARCH_PARAMS",
            "NAME" => GetMessage("SMYXS_P_MAX_FILTER"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "none" => GetMessage("SMYXS_P_MAX_FILTER_NONE"),
                "moderate" => GetMessage("SMYXS_P_MAX_FILTER_MODERATE"),
                "strict" => GetMessage("SMYXS_P_MAX_FILTER_STRICT"),
            ),
            "DEFAULT" => "none",
        ),
        "LINKS_ON_PAGE" => array(
            "PARENT" => "SEARCH_PARAMS",
            "NAME" => GetMessage("SMYXS_LINKS_ON_PAGE"),
            "TYPE" => "TEXT",      
            "DEFAULT" => "10",
        ),
        "ADRESS" => array(
            "PARENT" => "SEARCH_PARAMS",
            "NAME" => GetMessage("SMYXS_ADRESS"),
            "TYPE" => "TEXT",      
            "DEFAULT" => "",
        ),
    )
);
?>
