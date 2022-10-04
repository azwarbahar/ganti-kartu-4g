<?php
include("koneksi.php");
$provinsi = $_POST['provinsi'];
$tampil = mysqli_query($conn, "SELECT * FROM tb_teritori_tap WHERE provinsi='$provinsi' GROUP BY kabupaten");
$jml = mysqli_num_rows($tampil);
?>
<option value="" disabled selected> - PILIH - </option>
<?php
if ($jml > 0) {
    while ($r = mysqli_fetch_array($tampil)) {
?>
        <option value="<?php echo $r['kabupaten'] ?>"><?php echo $r['kabupaten'] ?></option>
<?php
    }
} else {
    echo "<option selected>- Pilih Kota/Kabupaten -</option>";
}

?>