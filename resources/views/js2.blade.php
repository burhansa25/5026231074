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
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            
                function validasi() {
                    var nrp = document.getElementById("nrp").value;
                    var nama = document.getElementById("nama").value;

                    if (nrp.length < 10) {
                        //alert("NRP harus 10 digit!");
                        swal("Pesan!", "NRP Anda baru memiliki " + nrp.length + " digit!", "error");
                        document.getElementById("nrp").focus();
                        return false;
                    } else if (nrp.length > 10) {
                        //alert("NRP tidak boleh lebih dari 10 digit!");
                        swal("Pesan!", "NRP Anda melebihi 10 digit, memiliki " + nrp.length + " digit!", "error");
                        document.getElementById("nrp").focus();
                        return false;
                    } else {
                        //alert("Data berhasil dikirim!");
                        swal("Pesan!", "Data berhasil dikirim!", "success");
                        return true;
                    }

                    if (nrp.length == 0) {
                        //alert("NRP tidak boleh kosong!");
                        swal("Pesan!", "NRP tidak boleh kosong!", "error");
                        document.getElementById("nrp").focus();
                        return false;
                    } else if (isNaN(nrp)) {
                        swal("Pesan!", "NRP harus berupa angka!", "error");
                        document.getElementById("nrp").focus();
                        return false;
                    }

                    if (nama.length == 0) {
                        //alert("Nama tidak boleh kosong!");
                        swal("Pesan!", "Nama tidak boleh kosong!", "error");
                        document.getElementById("nama").focus();
                        return false;
                    }
                    
                    
            }
        </script>
    </head>
    <body>
        <div class="container">
    
        <p>

        <form id="formDaftar" method="get" action="https://www.google.com" target="_blank" onsubmit="return validasi()">
        NRP :
        <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Isikan 10 digit NRP">
        <br>
        Nama :
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Andre" tooltip="Isikan Nama Anda">
        <br>
        <input type="submit" class="btn btn-success" onsubmit="validasi()" value="Daftar">
        </form>
    </p>
        </div>
            
    </body>
</html>