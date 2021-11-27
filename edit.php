<?php
    include "koneksi.php";
?>
<form method="post" action="hasil_edit.php?nim=<?php echo $_GET['nim'];?>" >
    <legend><b>-----EDIT DATA-----</b></legend>
    <?php
        $nim = $_GET['nim'];
        $hasil=mysqli_query($kon,"select * from data where nim=$nim");
        $data = mysqli_fetch_array($hasil);
    ?>
    <label>NIM </label>
    <input type="number" name="nim"><br>
    <label>Nama </label>
    <input type="text" name="nama"><br>
    <label>Prodi </label>
    <select name="prodi">
        <option value="IF">Teknik Informatika</option>
        <option value="EL">Teknik Elektro</option>
        <option value="SI">Teknik Sipil</option>
        <option value="TG">Teknik Geofisika</option>
        <option value="MA">Matematika</option>
    </select><br>
    <label>Angkatan </label>
    <input type="number" name="angkatan"><br>
    <p><input type="submit" name="simpan" value="simpan"></p>
</form>