<?php

function curl($url)
{
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "$url"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);
        return $output;      
}

$url = "http://localhost/trikphp/outputdata/makejson.php";
$data = curl($url);
$mahasiswa = json_decode($data);
foreach ($mahasiswa as $m) {
    echo $m->npm;
    echo "<hr>";
}
?>