<?php
    $barang = [
        [
            "nama_barang" => "Buku",
            "harga_barang" => 8000
        ],
        [
            "nama_barang" => "Pensil",
            "harga_barang" => 4000
        ],
        [
            "nama_barang" => "Penghapus",
            "harga_barang" => 2000
        ],
        [
            "nama_barang" => "Penggaris",
            "harga_barang" => 7000
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="mb-5 mt-5 text-center">Codepelita-Store</h2>
            <div class="col-md-7">
                <form method="POST" action="hasil.php">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <label for="">Nama Barang</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" id="nama_barang" required>
                                <option selected disabled value="">-- Pilih Barang --</option>
                                <?php foreach( $barang as $brg ) : ?>

                                <option value="<?= $brg["nama_barang"] ?>"><?= $brg["nama_barang"] ?></option>

                                <?php endforeach; ?>        
                            </select>
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="">Harga Barang</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="text" placeholder="Masukan Harga Barang">
                        </div>
                        <div class="col-md-3 mb-4">
                            <label for="">Quantity Barang</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control" type="number" placeholder="Masukan Quantity Barang">
                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="Hitung" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <h4 class="card-header text-center">Total Bayar</h4>
                    
                    <div class="card-body">
                        <h1 class="text-center">-</h1>
                    </div>
                </div>
            </div>    
        </div>
    </div>


    <!-- <script>
        function singleSelectChangeValue() {
        //Getting Value
        //var selValue = document.getElementById("singleSelectDD").value;
        var selObj = document.getElementById("nama_barang");
        var selValue = selObj.options[selObj.selectedIndex].value;
        //Setting Value
        document.getElementById("textFieldValueJS").value = selValue;
    }
    </script> -->
</body>
</html>