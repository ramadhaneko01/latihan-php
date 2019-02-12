<script src="../jquery.min.js"></script>
<script type="text/javascript">
    function copyForm() {
        $("#form-asli")
        .clone()
        .appendTo($("#form-dinamis"))
    }
</script>

<form action="input-simultan-proses.php" method="post">
   <div id="form-asli">
    <fieldset>
        <legend>Data :</legend>
        NPM : <input type="text" name="npm[]">
        Jurusan : <input type="text" name="jurusan[]">
        Nama : <input type="text" name="nama[]">
    </fieldset>
   </div>
   <div id="form-dinamis"></div>
    <button type="submit">Simpan</button>
    <button type="button" onclick="copyForm()">Tambah Form</button>
</form>
