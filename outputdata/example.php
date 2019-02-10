<?php

$url = "http://localhost/trikphp/outputdata/makexml.php";
$data = file_get_contents($url);
$obj = simplexml_load_string($data);
echo "<pre>";
print_r($obj);
echo "</pre>";

?>