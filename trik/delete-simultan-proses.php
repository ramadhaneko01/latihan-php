<?php
    include'../koneksi.php';
    $mahasiswa = $_POST['mahasiswa'];
    foreach ($mahasiswa as $m) {
        mysqli_query($koneksi, "delete from profile where npm='$m'");
    }
    header('location: delete-simultan.php');
?>