<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Form Pengunjung Perpustakaan</title>
        <link rel="stylesheet" href="layout.css" media="screen" title="no title">
    </head>

    <script>
        function setValue(){
            var jumlah = document.getElementById("jumlah");
            var mangga = document.getElementById("mangga").value * 15000;
            var jambu = document.getElementById("jambu").value * 13000;
            var salak = document.getElementById("salak").value * 10000;
            var hasil = mangga + jambu + salak;
            jumlah.value = hasil;
        }
    </script>
    <body>
        <form action="minggu6.php" method="POST" id="Perbelanjaan" name="perbelanjaan">
            <div id="daftar">
                <h2 id="daftar_judul">Form Perbelanjaan</h2>

                <div class="box">
                    <label>Buah Mangga , Rp 15.000 / Kg </label>
                    <input type="number" name="mangga" id="mangga" required onchange="setValue()" >
                </div>

                <div class="box">
                    <label>Buah Jambu , Rp 13.000 / Kg </label>
                    <input type="number" name="jambu" id="jambu" required onchange="setValue()" >                
                </div>

                <div class="box">
                    <label>Buah Salak , Rp 10.000 / Kg </label>
                    <input type="number" name="salak" id="salak" required onchange="setValue()" >
                </div>
                
                <div class="box">
                    <label>Total Harga Belanja </label>
                    <input type="text" name="jumlah" id="jumlah" readonly>
                </div>

                <button type="submit" class="tombol">Kirim</button>
                
                <div class="bottom">
                    <p></p>
                </div>

                <div class="bottom">
                    <p>Copyrights By Hafizh L</p>
                </div>
            </div>
        </form>
    </body>
</html>
