<?php

$url = "http://data.bmkg.go.id/gempadirasakan.xml";
$data = file_get_contents($url);
$obj = simplexml_load_string($data);
foreach ($obj as $rows) {
    $point = $rows->point;
    
}


?>