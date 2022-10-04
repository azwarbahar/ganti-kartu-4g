<?php
include("koneksi.php");
$kabupaten = $_POST['kabupaten'];
$tampil = mysqli_query($conn, "SELECT * FROM tb_teritori_tap WHERE kabupaten='$kabupaten' GROUP BY kecamatan");
$jml = mysqli_num_rows($tampil);

?>
<option value="" disabled selected> - PILIH - </option>
<?php

if ($jml > 0) {
    while ($r = mysqli_fetch_array($tampil)) {
?>
        <option value="<?php echo $r['kecamatan'] ?>"><?php echo $r['kecamatan'] ?></option>
<?php
    }
} else {
    echo "<option selected>- Pilih Kota/Kabupaten -</option>";
}

?>