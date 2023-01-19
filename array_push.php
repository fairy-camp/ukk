<?php 
    $barang = ["Buku","Pensil","Penghapus","Penggaris"];
    $total = [85000, 70000, 55000];

    // if (isset($_POST['insertProduct'])) {
    //     $brg_baru = $_POST['nama'];
    //     // $barang = ["Buku","Pensil","Penghapus","Penggaris"];
    //     if (isset($_SESSION['myArray'])) {
    //         // $barang = $_SESSION['myArray'];
    //         array_push($barang, "$brg_baru");
    //         $_SESSION['myArray'] = $barang;
    //     } else {
    //         array_push($barang, "$brg_baru");
    //         $_SESSION['myArray'] = $barang;
    //     }
    // }
    // echo print_r($inserted_products);

    

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
    
    <h2>Data Barang</h2>
    
    <form action="" method="POST">
        <select name="" id="" class="mb-3">
            <option value="">-- Pilih --</option>
            <?php foreach($barang as $brg) : ?>
                <option value="<?= $brg ?>"><?= $brg ?></option>
            <?php endforeach ?>
        </select> <br>
        <input type="text" class="mb-3" name="harga" placeholder="Harga Barang"> <br>    
        <input type="text" class="mb-3" name="qty" placeholder="Qty Barang"> <br>    
        <input type="submit" name="insertProduct">
    </form>
    
</div>




</body>
</html>