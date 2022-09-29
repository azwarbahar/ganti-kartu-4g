<?php
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <title>Ganti Kartu Ke 4G | Telkomsel</title>
    <!-- metatags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Masih pakai 3G? Ganti ke 4G sekarang untuk internetan semakin cepat dan murah. Dijamin gak ribet, gak mahal, gak lemot, dan gak boros!">
    <meta name="keywords" content="Telkomsel, 3G, 4G, Ganti Kartu, Ganti Kartu 4G, Ganti Kartu 3G ke 4G, Telkomsel Terbaru, Info Telkomosel, Telkomsel Update, Kisel, Relkomsel Kartu Terbaru" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--stylesheet-css-->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- //css files -->
</head>

<body>
    <h1>Ganti Kartu Ke 4G</h1>
    <h5>Kami bantu pelanggan setia</h5>
    <h5>Telkomsel ganti kartu 3G ke 4G</h5>
    <h5>Kami Antar Ke Tempat Bapak/Ibu</h5>
    <br>
    <div class="w3l-main">
        <div class="w3l-from">
            <form action="#" method="POST" name="form_pengajuan" id="form_pengajuan">
                <div class="w3l-user">
                    <label class="head">Nama Lengkap<span class="w3l-star"> * </span></label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required="">
                </div>
                <div class="w3l-mail">
                    <label class="head">Nomor Telpon<span class="w3l-star"> * </span></label>
                    <input type="number" minlength="9" name="no_telpon_3g" id="no_telpon_3g" placeholder="Nomor Yang Ingin Diganti Ke 4G" required="p">
                </div>
                <div class="w3l-mail">
                    <label class="head">Nomor Telpon Lainnya</label>
                    <input type="number" name="no_telpon_lainnya" id="no_telpon_lainnya" placeholder="Nomor Yang Dapat Dihubungi">
                </div>
                <div class="w3l-mail">
                    <label class="head">Jam<span class="w3l-star"> * </span></label>
                    <input type="time" name="jam" id="jam" placeholder="Nomor Yang Dapat Dihubungi" required="">
                </div>
                <div class="w3l-mail">
                    <label class="head">Tanggal<span class="w3l-star"> * </span></label>
                    <input type="date" name="tanggal" id="tanggal" required="">
                </div>
                <div class="w3l-sym">
                    <label class="head">Alamat<span class="w3l-star"> * </span></label>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required="">
                </div>
                <div class="kota">
                    <label class="head">Provinsi<span class="w3l-star"> * </span></label>
                    <select class="form-control" name="provinsi" id="provinsi" required="">
                        <option>- PILIH -</option>
                        <?php
                        $provinsi = mysqli_query($conn, "SELECT * FROM tb_teritori_tap GROUP BY provinsi");
                        while ($row = mysqli_fetch_assoc($provinsi)) {
                            echo "<option value='$row[provinsi]'>$row[provinsi]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="kota">
                    <label class="head">Kota/Kabupaten<span class="w3l-star"> * </span></label>
                    <select class="form-control" name="kota" id="kota" required="">
                        <option>- PILIH -</option>

                        <?php
                        // $kota = mysqli_query($conn, "SELECT * FROM tb_teritori_tap GROUP BY kabupaten");
                        // while ($row = mysqli_fetch_assoc($kota)) {
                        //     echo "<option value='$row[kabupaten]'>$row[kabupaten]</option>";
                        // }
                        ?>
                    </select>
                </div>
                <div class="kota">
                    <label class="head">Kecamatan<span class="w3l-star"> * </span></label>
                    <select class="form-control" name="kecamatan" id="kecamatan" required>
                        <option>- PILIH -</option>

                    </select>
                </div>
                <div class="kota">
                    <label class="head">Kelurahan<span class="w3l-star"> * </span></label>
                    <select class="form-control" name="kelurahan" id="kelurahan" required>
                        <option>- PILIH -</option>

                    </select>
                </div>
                <div class="clear"></div>
                <div class="w3l-rem">

                    <div class="btn">
                        <input type="submit" name="submit" id="submit" value="Submit" />
                    </div>
                </div>
                <div class="clear"></div>
            </form>
            <div id="status"></div>
        </div>
    </div>
    <footer>&copy; 2022 Ganti Kartu 4G | <a href="https://www.telkomsel.com/"> Telkomsel</a>
    </footer>
    <!-- Default-JavaScript -->
    <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- Calendar -->
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/dist/sweetalert2.min.css">
    <script>
        // $(function() {
        //     $("#datepicker,#datepicker1").datepicker();

        //     $('#datetimepicker3').datetimepicker({
        //         locale: 'id'
        //     });
        // });
    </script>
    <!-- //Calendar -->


    <script type="text/javascript">
        $(document).ready(function() {
            $("#form_pengajuan").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'submit_pengajuan.php',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        document.getElementById("form_pengajuan").reset();
                        $('#status').html(data);
                    }
                });
            });
        })
    </script>

    <script type="text/javascript">
        $('#provinsi').change(function() {
            var provinsi = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'kota.php',
                data: 'provinsi=' + provinsi,
                success: function(response) {
                    $('#kota').html(response);
                }
            });
        });

        $('#kota').change(function() {
            var kabupaten = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'kecamatan.php',
                data: 'kabupaten=' + kabupaten,
                success: function(response) {
                    $('#kecamatan').html(response);
                }
            });
        });

        $('#kecamatan').change(function() {
            var kecamatan = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'kelurahan.php',
                data: 'kecamatan=' + kecamatan,
                success: function(response) {
                    $('#kelurahan').html(response);
                }
            });
        });
    </script>

    <script>
        var date = new Date();
        var tDate = date.getDate() + 1;
        var month = date.getMonth() + 1;
        if (tDate < 10) {
            tDate = '0' + tDate;
        }
        if (month < 10) {
            month = '0' + month;
        }
        var year = date.getUTCFullYear();
        var minDate = year + "-" + month + "-" + tDate;
        document.getElementById("tanggal").setAttribute('min', minDate)
        console.log(minDate);
    </script>


</body>

</html>