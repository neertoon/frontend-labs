<?php
$polygonString = '4px 5px,4px 415px,152px 419px,791px 421px,958px 419px,960px 5px,782px 0px,145px 0px';

$width = 960;
$height = 420;

$pairs = explode(',', $polygonString);

$newPairs = [];
foreach ($pairs as $pair) {
    list($x, $y) = explode(' ', $pair);
//    echo $x;
//    echo " : ";
//    echo $y;
//    echo "<br>";
    
    $x = str_replace('px', '', $x);
    $y = str_replace('px', '', $y);
    
    $newX = $x / $width * 100;
    $newY = $y / $height * 100;

    $newPairs[] = $newX.'% '.$newY.'%';
}

echo 'polygon('.implode(', ', $newPairs).')';