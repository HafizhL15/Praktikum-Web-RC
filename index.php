<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="index.js"></script>
    <title>Praktikum Minggu 4</title>
</head>
<body>
    <h1 align="center">Tugas Minggu 4 Praktikum Pemrograman Web</h1>
    <h1 align="center">Create Read Update Delete</h1>
    <hr><hr>
    <section class="">
        <div class="row" style="text-align: center; border: 5px">
            <div class="col">
                <form action="" method="POST" id="form_mahasiswa">
                <h3>FORM MAHASISWA</h3>
                    <label for="id" id="id_label" hidden >id :</label>
                    <input type="text" name="id" id="id" hidden readonly> <br> <br>
                    <label for="">NIM : </label>
                    <input type="text" name="nim" id=""> <br> <br>
                    <label for="">Nama : </label>
                    <input type="text" name="nama" id=""> <br> <br>
                    <label for="">Prodi : </label>
                    <select name="prodi" id="">
                        <option value="IF">Teknik Informatika</option>
                        <option value="EL">Teknik Elektro</option>
                        <option value="GL">Teknik Geologi</option>
                        <option value="MA">Matematika</option>
                        <option value="KA">Kimia</option>
                        <option value="FA">Farmasi</option>
                    </select> <br> <br>
                    <label for="">Angkatan : </label>
                    <input type="text" name="angkata" id=""> <br> <br>
                    <button class="btn btn-success" id="submit">Submit</button>
                    <button class="btn btn-primary" id="update" hidden>Update</button>
                    <button class="btn btn-danger" id="cancel" hidden>Cancel Update</button>
                </form>
            </div>
            <div class="col">
                <br><br>
                <div id="read_data"></div>
            </div>
        </div>
    </section>
    <br><hr>
    <h4 style="text-align: center;">
        <i>Copyrights By Hafizh L</i>
    </h4>
    <hr>
</body>
</html>