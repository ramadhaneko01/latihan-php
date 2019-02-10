<?php
include'../koneksi.php';
// include library excel
include '../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php';
// nama file
$inputFileName = 'mahasiswa.xlsx';
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch (Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}
// Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();
// Loop through each row of the worksheet in turn
echo "<table border=1>";
for($row = 2; $row <= $highestRow; $row++){
    // Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
    $no = str_replace("'","",$rowData[0][0]);
    $npm = str_replace("'","",$rowData[0][1]);
    $kelas = str_replace("'","",$rowData[0][2]);
    $nama = str_replace("'","",$rowData[0][3]);
   echo "<tr><td>$no</td><td>$npm</td><td>$kelas</td><td>$nama</td></tr>";
   // perintah insert data ke database
   mysqli_query($koneksi,"insert into mahasiswa set npm='$npm', kelas='$kelas', nama='$nama'");
}
echo "</table>";

?>