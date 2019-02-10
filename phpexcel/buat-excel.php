<?php
include '../koneksi.php';
include '../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
include '../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php';

$objPHPExcel = new PHPExcel();

$objPHPExcel->getActiveSheet()->setCellValue('A1','NPM');
$objPHPExcel->getActiveSheet()->setCellValue('B1','Kelas');
$objPHPExcel->getActiveSheet()->setCellValue('C1','Nama');

$mahasiswa = mysqli_query($koneksi,"select * from mahasiswa");
$no = 2;
while ($data = mysqli_fetch_array($mahasiswa)) {
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $no, $data['npm']);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $no, $data['kelas']);
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $no, $data['nama']);
    $no++;
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'excel2007');
$objWriter->save("datamahasiswa.xlsx");
?>