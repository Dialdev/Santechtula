<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";
	
$strReturn = '<div class="bx_breadcrumbs"><ul itemscope itemtype="http://schema.org/BreadcrumbList">';

$num_items = count($arResult);
for($index = 0, $itemSize = $num_items; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
		$strReturn .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item"><span itemprop="name">'.$title.'</span><meta itemprop="position" content="'.$index.'"></a></li>/';
	else
		$strReturn .= '<li><span class="cur-crumb">'.$title.'</span></li>';
}

$strReturn .= '</ul></div>';

return $strReturn;
?>