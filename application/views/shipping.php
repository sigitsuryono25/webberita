<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>

        <label>Kurir</label><br>
        <select id="kurir" name="kurir">
            <option value="jne">JNE</option>
            <option value="tiki">TIKI</option>
            <option value="pos">POS INDONESIA</option>
        </select>
        <br>
        <input type="number" name="berat" id="berat" />
        <br>
        <label>Pilih Kota Asal</label><br>
        <select id="asal">
            <?php for ($i = 0; $i < sizeof($kota_asal['rajaongkir']['results']); $i++) { ?>
                <option value='<?php echo $kota_asal['rajaongkir']['results'][$i]['city_id'] ?>'>
                    <?php echo $kota_asal['rajaongkir']['results'][$i]['city_name'] ?>
                </option>
            <?php } ?>
        </select>
        <br>
        <label>Pilih Provinsi Tujuan</label><br>
        <select id="provinsi">
            <?php for ($i = 0; $i < sizeof($provinsi_tujuan['rajaongkir']['results']); $i++) { ?>
                <option value='<?php echo $provinsi_tujuan['rajaongkir']['results'][$i]['province_id'] ?>'>
                    <?php echo $provinsi_tujuan['rajaongkir']['results'][$i]['province'] ?>
                </option>
            <?php } ?>
        </select>
        <br>
        <label>Pilih Kabupaten</label><br>
        <select id="kabupaten"></select>
        <br>
        <button id="cek">Cek</button>
    </body>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#provinsi').change(function () {

                //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
                var prov = $(this).val();
                console.log(prov);

                $.ajax({
                    type: 'POST',
                    url: '<?php echo site_url('keranjang/cekKabupaten') ?>',
                    data: 'prov_id=' + prov,
                    success: function (data) {

                        //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                        $("#kabupaten").html(data);
                    }
                });

                console.log('<?php echo site_url('keranjang/cekKabupaten') ?>?prov_id=' + prov);
            });

            $("#cek").click(function () {
                //Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax 
                var asal = $('#asal').val();
                var kab = $('#kabupaten').val();
                var kurir = $('#kurir').val();
                var berat = $('#berat').val();

                $.ajax({
                    type: 'GET',
                    url: '<?php echo site_url('keranjang/getOngkir') ?>',
                    dataType: 'json',
                    data: {'kab_id': kab, 'kurir': kurir, 'asal': asal, 'berat': berat},
                    success: function (data) {

                        //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
//                        $("#ongkir").text(data);
                    }
                });
                
                console.log("<?php echo site_url('keranjang/getOngkir') ?>?kab_id="+kab+"&kurir="+kurir+"&asal=" + asal + "&berat=500");
            });
        });
    </script>
</html>
