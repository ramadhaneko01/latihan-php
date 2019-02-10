<?php
include('../koneksi.php');

$xml = new XMLWriter();
$xml->openUri("php://output");
$xml->startDocument();
$xml->setIndent(true);
$mahasiswa = mysqli_query($koneksi,"select * from mahasiswa");
$xml->startElement("Students");
while ($row = mysqli_fetch_array($mahasiswa)) {
    //  create node
    $xml->startElement("Students");
    $xml->writeElement("npm", $row['npm']);
    $xml->writeElement("kelas", $row['kelas']);
    $xml->writeElement("nama", $row['nama']);
    $xml->endElement();
}
$xml->endElement();
//  set header
header('Content-type: text/xml');
$xml->flush();


?>