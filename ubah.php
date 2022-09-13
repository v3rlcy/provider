<?php

require 'function.php';

$id = $_GET["id_provider"];
$tbprovider = query("SELECT * FROM tb_providerinternet WHERE id_provider = $id")[0];


if (isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "<script> alert ('Berhasil'); 
        document.location.href = 'index.php'; </script>";
    } 
    else {
        echo "<script> alert ('Gagal'); 
        document.location.href = 'index.php'; </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data</h1>
    <form action="" method="post">
        <input type="hidden" name="id_provider" value="<?= $tbprovider["id_provider"];?>">
        <ul>
            <li>
                <label for="provider_name">provider name :</label>
                <input type="text" name="provider_name" required value="<?= $tbprovider["provider_name"];?>">
            </li>
            <li>
                <label for="customer_pakage">Customer Pakage :</label>
                <input type="text" name="customer_pakage" value="<?= $tbprovider["customer_pakage"];?>">
            </li>
            <li>
                <label for="description">Description :</label>
                <input type="text" name="description" value="<?= $tbprovider["description"];?>">
            </li>
            <li>
                <label for="price">price</label>
                <input type="text" name="price" value="<?= $tbprovider["price"];?>">
            </li>
            <li>
                <label for="active_on">active on :</label>
                <input type="text" name="active_on" value="<?= $tbprovider["active_on"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>