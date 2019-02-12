<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Datatables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../vendor/datatables/datatables/media/css/jquery.dataTables.cssd">
    <script type="text/javascript" language="javascript" src="../vendor/datatables/datatables/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../vendor/datatables/datatables/media/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
             $('#example').dataTable(); 
        })
    </script>
</head>
<body>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NPM</th>
                <th>KELAS</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('../koneksi.php');
                $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
                while ($record = mysqli_fetch_array($mahasiswa)) {
                    echo " <tr>
                <td>".$record['npm']."</td>
                <td>".$record['kelas']."</td>
                <td>".$record['nama']."</td>
            </tr>";
                }
            ?>
           
        </tbody>
        <tfoot>
            <tr>
                 <th>NPM</th>
                <th>KELAS</th>
                <th>NAMA</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>