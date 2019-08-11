<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("php");
?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"horizontal_multilevel",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "php_2",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "php",
		"USE_EXT" => "Y"
	)
);?>Text here....<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "incmain",
		"EDIT_TEMPLATE" => "",
		"PATH" => "maininc.php"
	)
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?><br>
<pre><?

$APPLICATION->ShowNavChain();

//добавляем элемент в навигационную цепочку
echo '<b>добавляем в навигационную цепочку ключевые слова раздела: </b>'.PHP_EOL
	.'$APPLICATION->AddChainItem($APPLICATION->GetDirProperty("keywords"));'.PHP_EOL;
$APPLICATION->AddChainItem($APPLICATION->GetDirProperty("keywords"));

echo '<b>var_dump($sSectionName):</b>'.PHP_EOL;
var_dump($sSectionName);

echo '<b>var_dump($APPLICATION->GetDirPropertyList()):</b>'.PHP_EOL;
var_dump($APPLICATION->GetDirPropertyList());

echo '<b>var_dump($APPLICATION->GetTitle()):</b>'.PHP_EOL;
var_dump($APPLICATION->GetTitle());

echo '<b>var_dump($APPLICATION->arSection:</b>'.PHP_EOL;
var_dump($APPLICATION->arSection);

echo '<b>var_dump($APPLICATION->arDirProperties:</b>'.PHP_EOL;
var_dump($APPLICATION->arDirProperties);

echo '<b>var_dump($APPLICATION->sSectionName:</b>'.PHP_EOL;
var_dump($APPLICATION->sSectionName);

//echo '<b>var_dump($APPLICATION:</b>'.PHP_EOL;
//var_dump($APPLICATION);
?>
</pre><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>