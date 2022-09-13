<?php

require 'function.php';
if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
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
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="provider_name">provider name :</label>
                <input type="text" name="provider_name" required>
            </li>
            <li>
                <label for="customer_pakage">Customer Pakage :</label>
                <input type="text" name="customer_pakage">
            </li>
            <li>
                <label for="description">Description :</label>
                <input type="text" name="description">
            </li>
            <li>
                <label for="price">price</label>
                <input type="text" name="price">
            </li>
            <li>
                <label for="active_on">active on :</label>
                <input type="text" name="active_on">
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan Data</button>
            </li>
        </ul>
    </form>
</body>
</html>