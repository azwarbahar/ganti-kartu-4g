<?php


require_once 'koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$no_telpon_3g = $_POST['no_telpon_3g'];
$no_telpon_lainnya = $_POST['no_telpon_lainnya'];
$jam = $_POST['jam'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];


$query_teritori = mysqli_query($conn, "SELECT * FROM tb_teritori_tap WHERE kelurahan = '$kelurahan'");
$get_teritori = mysqli_fetch_assoc($query_teritori);
$tap = $get_teritori['tap'];
$cluster = $get_teritori['cluster'];


$query = "INSERT INTO `tb_pengajuans` (`nama_lengkap`, `nomor_telpon1`, `nomor_telpon2`, `jam`, `tanggal`,
                                        `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `cluster`, `tap`)
            VALUES ('$nama_lengkap', '$no_telpon_3g', '$no_telpon_lainnya', '$jam', '$tanggal', '$alamat',
                    '$provinsi', '$kota', '$kecamatan', '$kelurahan', '$cluster', '$tap');";

if (mysqli_query($conn, $query)) {
?>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Terima Kasih',
            text: 'Anda akan dihubungi maksimal 1x24'
        })
    </script>

<?php

} else {
?>

    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
        })
    </script>

<?php
}
?>
<!DOCTYPE html>