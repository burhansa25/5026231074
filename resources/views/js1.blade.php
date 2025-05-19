<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function hello() {
                alert("Selamat Anda mendapat 2 Milyar");
            }
            function tambahAuto() {
                var bil1 = document.getElementById("bil1").value;
                var bil2 = document.getElementById("bil2").value;
                var hasil = parseInt(bil1) + parseInt(bil2);
                document.getElementById("hasil").innerHTML = hasil;
            }
            function tambah() {
                var bilangan1 = document.getElementById("bil1").value;
                var bilangan2 = document.getElementById("bil2").value;
                var hasil = Number.parseInt(bilangan1) + Number.parseInt(bilangan2);

                if (isNaN(hasil)) {
                    alert("Hasil Penjumlahan Tidak Valid");
                } else {
                    alert("Hasil Penjumlahan : " + hasil);
                }

                if (bilangan1 == "" || bilangan2 == "") {
                    alert("Bilangan tidak boleh kosong");
                } else {
                    alert("Bilangan tidak boleh kosong");
                }

                document.getElementById("hasil").innerHTML = hasil;
            }
        </script>
    </head>
    <body>
        <div class="container">
    <button class="btn btn-primary" onclick="hello();">Klik Disini</button>
    <p>
        Bilangan pertama :
        <input type="text" class="form-control" name="" id="bil1" value="0">
        <br>
        Bilangan kedua :
        <input type="text" class="form-control" name="" id="bil2" value="0">
        <br>
        Hasil Penjumlahan :
        <div id="hasil"></div>
        <br>
        <button class="btn btn-success" onclick="tambah()">Tambah</button>
    </p>
        </div>
            
    </body>
</html>