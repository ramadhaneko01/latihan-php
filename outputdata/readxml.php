<?php

$url = "http://localhost/trikphp/outputdata/makexml.php";
$data = file_get_contents($url);
$obj = simplexml_load_string($data);

foreach ($obj as $row) {
    echo $row->nama;
    echo "<hr>";
}

?>