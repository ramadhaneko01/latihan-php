<?php

include'../koneksi.php';

//  mengambil data dari database
$sql = "select * from mahasiswa";
$result = mysqli_query($koneksi, $sql);

//  membuat array
$data = array();
while($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

//  konversi data array ke json
echo json_encode($data);



?>