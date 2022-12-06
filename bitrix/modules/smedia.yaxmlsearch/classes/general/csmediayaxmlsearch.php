<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeModuleLangFile(__FILE__);
?>
<?
class CSmediaYaXmlSearch {    
    function HighlightWords($node) {
        $stripped = preg_replace('/<\/?(title|passage)[^>]*>/', '', $node->asXML());
        return str_replace('</hlword>', '</span>', preg_replace('/<hlword[^>]*>/', '<span class="highlight">', $stripped));
    }

    function HumanFilesize($size, $precision = 1) {                                                                          
        $arFileSizeNames = array(
            GetMessage('SMEDIA_YAXML_SIZE_B'), 
            GetMessage('SMEDIA_YAXML_SIZE_KB'), 
            GetMessage('SMEDIA_YAXML_SIZE_MB'), 
            GetMessage('SMEDIA_YAXML_SIZE_GB'), 
            GetMessage('SMEDIA_YAXML_SIZE_TB'), 
            GetMessage('SMEDIA_YAXML_SIZE_PB'), 
            GetMessage('SMEDIA_YAXML_SIZE_EB'), 
            GetMessage('SMEDIA_YAXML_SIZE_ZB'), 
            GetMessage('SMEDIA_YAXML_SIZE_YB'), 
        );
        return $size ? round($size / pow(1024, ($i = floor(log($size, 1024)))), $precision) . ' ' . $arFileSizeNames[$i] : '0 ' . GetMessage('SMEDIA_YAXML_SIZE_B');
    }

    function checkEncoding($text, $reverse = false)
    {
        if (strtoupper(SITE_CHARSET) != "UTF-8")
        {
            return reverse ? iconv("UTF-8", SITE_CHARSET, $text) : iconv(SITE_CHARSET, "UTF-8", $text);
        }
        else
        {
            return $text;
        }
    }
    
    function Search($query, $page, $arParams) { 
        global $APPLICATION;
        $arResult = array(); 

        $found = 0;
        $page = $page > 0 ? $page : 0;
        $query = self::checkEncoding($query);

        $arParams["LINKS_ON_PAGE"] = intval($arParams["LINKS_ON_PAGE"]) > 0 ? $arParams["LINKS_ON_PAGE"] : 10;
        $arParams["MAX_PASSAGES"] = intval($arParams["MAX_PASSAGES"]) > 0 ? $arParams["MAX_PASSAGES"] : 2;

        if ($arParams["FILTER"] != "moderate" && $arParams["FILTER"] != "strict")
        {
            $arParams["FILTER"] = "none";
        }

        $arResult["LINKS_ON_PAGE"] = $arParams["LINKS_ON_PAGE"]; 
        $arResult["REQUEST"]["QUERY"] = htmlspecialchars($query); 

        if($arParams["SORT_BY"] == "tm")
            $sort = "tm";
        else     
            $sort = "rlv";
           
        if ($query) {
            $httpQuery = $arParams["ADRESS"] 
                       . "&query=" . urlencode(htmlspecialchars($query) . ' host:' . htmlspecialchars(SITE_SERVER_NAME)) 
                       . "&groupby=mode%3Dflat.groups-on-page%3D" . $arParams["LINKS_ON_PAGE"] . ".docs-in-group%3D1&sortby=" . $sort 
                       . "&maxpassages=" . $arParams["MAX_PASSAGES"] 
                       . "&page=" . intval($page)
                       . "filter=" . $arParams["FILTER"];
                       
            $response = file_get_contents($httpQuery);

            if (strlen($response) > 0) 
            {  
                $obResponse = simplexml_load_string($response);
                $error = (string)$obResponse->response->error;

                if (empty($error))
                {
                    $arResult["FOUND_ALL"] = (string)$obResponse->response->{"found"};
                    $arResult["FOUND_HUMAN"] = (string)$obResponse->response->{"found-human"};
                    $arResult["OL_START"] = $arParams["LINKS_ON_PAGE"] * $page + 1;

                    $arItems = $obResponse->response->results->grouping->group;

                    $arResult["RESULTS"] = array();

                    foreach ($arItems as $obItem)
                    {
                        $arPassages = array();
                        for ($i = 0; $i < $arParams["MAX_PASSAGES"]; $i++)
                        {
                            if (!empty($obItem->doc->passages[$i]->passage))
                            {
                                $arPassages[] = self::HighlightWords($obItem->doc->passages[$i]->passage);
                            }
                        }

                        if (count($arPassages) > 0)
                        {   
                            $strPassages = implode("&hellip; &hellip;", $arPassages);
                        }
                        else
                        {
                            $strPassages = self::HighlightWords($obItem->doc->headline);
                        }

                        $arResult["RESULTS"][] = array(
                            "URL"        => (string)$obItem->doc->url,
                            "DOMAIN"     => (string)$obItem->doc->domain,
                            "TITLE"      => self::HighlightWords($obItem->doc->title),
                            "MODTIME"    => (string)$$obItem->doc->modtime,
                            "SIZE"       => (int)$obItem->doc->size,
                            "SIZE_HUMAN" => self::HumanFilesize((int)$obItem->doc->size),
                            "CHARSET"    => (string)$$obItem->doc->charset,
                            "PASSAGES"   => $strPassages,
                        ); 
                    }
                }
                else
                {
                    $arResult["ERROR"] = array("CODE" => 0, "TEXT" => GetMessage('SMEDIA_YAXML_ERROR') . self::checkEncoding((string)$obResponse->response->error, true));
                }      
            }
            else
            {
                $arResult["ERROR"] = array("CODE" => 0, "TEXT" => GetMessage('SMEDIA_YAXML_ERROR') . GetMessage('SMEDIA_YAXML_ERROR_NO_RESPONSE'));
            }
        
        }
        else
        {
            $arResult["ERROR"] = array("CODE" => 0, "TEXT" => GetMessage('SMEDIA_YAXML_ERROR') . GetMessage('SMEDIA_YAXML_ERROR_NO_QUERY'));
        }

        return $arResult;
    }                                                                                         
}
?>