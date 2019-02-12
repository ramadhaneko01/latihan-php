<form action="delete-simultan-proses.php" method="post">
<table>
    <tr><td><input type="checkbox" name="" id="check_all"></td><td>NPM</td><td>Jurusan</td><td>Nama</td></tr>
    <?php
        include '../koneksi.php';
        $query = mysqli_query($koneksi,"select * from profile");
        while ($r = mysqli_fetch_array($query)) {
            echo "<tr><td><input type='checkbox' class='check' name='mahasiswa[]' value='$r[npm]'></td><td>$r[npm]</td><td>$r[jurusan]</td><td>$r[nama]</td></tr>";
        }
    ?>
</table>
        <button type="submit" name="submit">Hapus Data</button>
</form>
<script src="../jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#check_all').on('click', function() {
            if (this.checked) {
                 $('.check').each(function() {
                     this.checked=true;
                 });
            }else{
                $('.check').each(function() {
                     this.checked=false;
                 });
            }
        });
    }); 
</script>