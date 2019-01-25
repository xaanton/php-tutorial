<?php
$GLOBALS['PAGES_DIRECTORY'] = './pages';
$GLOBALS['FUNC_PATH'] = $_SERVER['DOCUMENT_ROOT'] . "/functions/Functions.php";

include($GLOBALS['FUNC_PATH']);
include("./functions/PrimeNumbers.php");

//echo '<script type="application/javascript">alert("Hello!")</script>';
echo("<h2>Content</h2><br>");

$pages = array_diff(scandir($GLOBALS['PAGES_DIRECTORY']), array('.', '..'));
array_filter($pages, function($value) { return $value !== '' && $value !== NULL; });
$pages_reindexed = array_values($pages);

//print_r($pages);
//print_r($pages_reindexed);

//$titles = ["Arrays", "Arrays_with_keys", "Strings"];

for($i = 0; $i < sizeof($pages_reindexed); $i++){
    makeLink($pages_reindexed[$i], $i+1);
}

print_r(PrimeNumbers::findPrimeNumbers(99961));

print_r(PrimeNumbers::findPrimeNumbers("asadasd"));
