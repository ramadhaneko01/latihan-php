<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    // echo $_POST['kelas'][1];
    include '../koneksi.php';
    $jml_data = count($_POST['nama']);
    // echo $jml_data;
    for ($i=0; $i < $jml_data; $i++) { 
        $npm = $_POST['npm'][$i];
        $jurusan = $_POST['jurusan'][$i];
        $nama = $_POST['nama'][$i];
        $query = mysqli_query($koneksi,"insert into profile set npm='$npm', jurusan='$jurusan', nama='$nama'");
    }
     if ($query === 1)
            echo "oke";
    
?>