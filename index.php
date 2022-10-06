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
    <h1>Ganti Kartu 3G Ke 4G</h1>
    <h5>Kami bantu pelanggan setia</h5>
    <h5>Telkomsel ganti kartu 3G ke 4G</h5>
    <h5>Kami Antar Ke Tempat Bapak/Ibu</h5>
    <h5 style="font-size: 14px; font-weight: bold; margin-top: 5px; margin-bottom: 5px;">Cek status kartu <span style="background-color: #000000; font-size: 12px; color: #FFFFFF; padding-top: 6px; padding-bottom: 4px; padding-left: 8px; padding-right: 8px; border-radius: 20px;">*888*47#</span></h5>
    <div class="w3l-main">
        <div class="w3l-from" style="border-radius: 8px ;">
            <form action="#" method="POST" name="form_pengajuan" id="form_pengajuan">
                <div class="w3l-user">
                    <label class="head">Nama Lengkap<span class="w3l-star"> * </span></label>
                    <input type="text" style="border-radius: 6px ; background-color: #FFFFFF;" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required="">
                </div>
                <div class="w3l-user" id="continer_no_3g">
                    <label class="head">Nomor HP<span class="w3l-star"> * </span>(Format 08..)</label>
                    <p id="notif_no_3g" hidden style="color: #000000 ;">Silahkan Isi 9-12 angka</p>
                    <input type="text" minlength="9" maxlength="12" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1'); if(this.value.length < 9){this.setCustomValidity('Kurang dari 9 angka')} else {this.setCustomValidity('')};" style="border-radius: 6px ; background-color: #FFFFFF;" onKeyPress="if(this.value.length==12) return false;" name="no_telpon_3g" id="no_telpon_3g" placeholder="Nomor Yang Ingin Diganti Ke 4G" required="">
                </div>
                <div class="w3l-user" id="continer_no_lainnya">
                    <label class="head">Nomor HP Lainnya (Format 08..)</label>
                    <p id="notif_no_lainnya" hidden style="color: #000000 ;">Silahkan Isi 9-12 angka</p>
                    <input type="text" minlength="9" maxlength="12" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1'); if(this.value.length  >= 1 && this.value.length < 9){this.setCustomValidity('Kurang dari 9 angka')} else if(this.value.length == 0 || this.value == ''){this.setCustomValidity('')} else {this.setCustomValidity('')};" style="border-radius: 6px ; background-color: #FFFFFF;" onKeyPress="if(this.value.length==12) return false;" name="no_telpon_lainnya" id="no_telpon_lainnya" placeholder="Nomor Yang Dapat Dihubungi">
                </div>
                <div class="w3l-mail">
                    <label class="head">Jam<span class="w3l-star"> * </span></label>
                    <input type="time" style="border-radius: 6px ; background-color: #FFFFFF;" name="jam" id="jam" placeholder="Jam" required="">
                </div>
                <div class="w3l-mail">
                    <label class="head">Tanggal<span class="w3l-star"> * </span></label>
                    <input type="date" style="border-radius: 6px ; background-color: #FFFFFF; border-bottom: 2px solid #fff;" name="tanggal" id="tanggal" placeholder="Tanggal" required="">
                </div>
                <div class="w3l-user">
                    <label class="head">Alamat Lengkap Pengantaran Kartu<span class="w3l-star"> * </span></label>
                    <input type="text" style="border-radius: 6px ; background-color: #FFFFFF;" name="alamat" id="alamat" placeholder="Jalan/Gedung/Komplek" required="">
                </div>
                <div class="kota" style="margin: 0px auto 10px;">
                    <label class="head">Provinsi<span class="w3l-star"> * </span></label>
                    <select class="form-control" style="border-radius: 6px ; background-color: #FFFFFF; border-bottom: 2px solid #fff;" name="provinsi" id="provinsi" required>
                        <option value="" disabled selected>- PILIH -</option>
                        <?php
                        $provinsi = mysqli_query($conn, "SELECT * FROM tb_teritori_tap GROUP BY provinsi");
                        while ($row = mysqli_fetch_assoc($provinsi)) {
                            echo "<option value='$row[provinsi]'>$row[provinsi]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="kota" style="margin: 0px auto 10px;">
                    <label class="head">Kota/Kabupaten<span class="w3l-star"> * </span></label>
                    <select class="form-control" style="border-radius: 6px ; background-color: #FFFFFF; border-bottom: 2px solid #fff;" name="kota" id="kota" required>
                        <option value="" disabled selected>- PILIH -</option>
                        <?php
                        // $kota = mysqli_query($conn, "SELECT * FROM tb_teritori_tap GROUP BY kabupaten");
                        // while ($row = mysqli_fetch_assoc($kota)) {
                        //     echo "<option value='$row[kabupaten]'>$row[kabupaten]</option>";
                        // }
                        ?>
                    </select>
                </div>
                <div class="kota" style="margin: 0px auto 10px;">
                    <label class="head">Kecamatan<span class="w3l-star"> * </span></label>
                    <select class="form-control" style="border-radius: 6px ; background-color: #FFFFFF; border-bottom: 2px solid #fff;" name="kecamatan" id="kecamatan" required>
                        <option value="" disabled selected>- PILIH -</option>
                    </select>
                </div>
                <div class="kota" style="margin: 0px auto 10px;">
                    <label class="head">Kelurahan<span class="w3l-star"> * </span></label>
                    <select class="form-control" style="border-radius: 6px ; background-color: #FFFFFF; border-bottom: 2px solid #fff;" name="kelurahan" id="kelurahan" required>
                        <option value="" disabled selected>- PILIH -</option>
                    </select>
                </div>
                <div class="clear"></div>
                <div class="w3l-rem">
                    <div class="btn">
                        <input type="submit" style="border-radius: 6px ;" name="submit" id="submit" value="Submit" />
                    </div>
                </div>
                <div class="clear"></div>
            </form>
            <div id="status"></div>
        </div>
    </div>
    <footer>&copy; 2022 <a href="https://kinarya-solusi.com/">PT. Kinarya Selaras Solusi</a> | Gowa
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
        $('#tanggal').click(function(e) {
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
        });
    </script>

    <script type="text/javascript">
        // $(document).ready(function() {
        $("#form_pengajuan").submit(function(e) {
            // nomor_lainnya.setCustomValidity('');
            e.preventDefault();
            var continer_no_3g = document.getElementById("continer_no_3g");
            var nomor3g = document.getElementById("no_telpon_3g");
            var nomor3g_val = document.getElementById("no_telpon_3g").value;
            if (nomor3g_val.length < 9) {
                nomor3g.focus();
                // nomor3g.setCustomValidity("Pesan ini");
                continer_no_3g.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            } else {
                // nomor3g.setCustomValidity("");
                var continer_no_lainnya = document.getElementById("continer_no_lainnya");
                var nomor_lainnya = document.getElementById("no_telpon_lainnya");
                var nomor_lainnya_val = document.getElementById("no_telpon_lainnya").value;
                if (nomor_lainnya_val.length >= 1 && nomor_lainnya_val.length < 9) {
                    nomor_lainnya.focus();
                    continer_no_lainnya.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                } else {
                    nomor_lainnya.setCustomValidity('');
                    $.ajax({
                        url: 'submit_pengajuan.php',
                        type: 'post',
                        data: $(this).serialize(),
                        success: function(data) {
                            document.getElementById("form_pengajuan").reset();
                            $('#status').html(data);
                        }
                    });
                }
            }
        });
        // })
    </script>

    <script type="text/javascript">
        $('#no_telpon_3g').keyup(function() {
            var nomor3g = $(this).val();

            var notif_no_3g = document.getElementById("notif_no_3g");
            if (nomor3g.length < 9) {
                notif_no_3g.style.display = "block";
            } else {
                notif_no_3g.style.display = "none";
            }
        });

        $('#no_telpon_lainnya').keyup(function() {
            var nomorlainnya = $(this).val();

            var notif_no_lainnya = document.getElementById("notif_no_lainnya");
            if (nomorlainnya.length >= 1 && nomorlainnya.length < 9) {
                notif_no_lainnya.style.display = "block";
            } else if (nomorlainnya == "") {
                notif_no_lainnya.style.display = "none";
            } else {
                notif_no_lainnya.style.display = "none";
            }
        });

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

</body>

</html>