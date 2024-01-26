<?php

echo "<b>Article List:</b>";

$html = file_get_contents("./vBulletin_Manual.html");
$regexptitle = '#\<h2\>(.+?)\<\/h2\>#s';
$regexpdata = '#\<\/h2\>(.+?)\<h2\>#s';

$count = 0;

if (preg_match_all($regexptitle, $html, $matches)) {

If (preg_match_all($regexpdata, $html, $matches2)){
    while ($count < count($matches[0]) ){
        $count++ ;
        echo $matches[0][$count];
        echo $matches2[0][$count];
        }	
    }
}
else {
    "There were no article titles found";
}

print_r($matches);
?>