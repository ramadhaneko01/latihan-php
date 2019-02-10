<?php

ini_set('max_execution_time', 1000);
include('../koneksi.php');
for ($i=1; $i <= 1000 ; $i++) { 
    mysqli_query($koneksi, "insert into mahasiswa set npm='5541562$i', kelas='4ia$i', nama='ramadhan'");
}

?>