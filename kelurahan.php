<?php
include("koneksi.php");
$kecamatan = $_POST['kecamatan'];
$tampil = mysqli_query($conn, "SELECT * FROM tb_teritori_tap WHERE kecamatan='$kecamatan' GROUP BY kelurahan");
$jml = mysqli_num_rows($tampil);
?>
<option value="" disabled selected> - PILIH - </option>
<?php
if ($jml > 0) {
    while ($r = mysqli_fetch_array($tampil)) {
?>
        <option value="<?php echo $r['kelurahan'] ?>"><?php echo $r['kelurahan'] ?></option>
<?php
    }
} else {
    echo "<option selected>- Pilih Kecamatan -</option>";
}

?>