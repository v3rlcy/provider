<?php

require 'function.php';
$provider = query ("SELECT * FROM tb_providerinternet");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Internet</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>
                No.
            </th>
            <th>
                Aksi
            </th>
            <th>
                Provider Name
            </th>
            <th>
                Customer paket
            </th>
            <th>
                Desc
            </th>
            <th>
                Price
            </th>
            <th>
                Active On
            </th>
        </tr>

        <?php $i=1; ?>
        <?php foreach($provider as $row):?>

        <tr>
            <td>
                <?php $i = 1; ?>
            </td>
            <td>
                <a href="ubah.php?id_provider=<?= $row["id_provider"];?>">Ubah Data</a>|
                <a href="hapus.php?id_provider=<?= $row["id_provider"];?>" onclick = "return confirm ('yakin?')">Hapus Data</a>
            </td>
            <td>
                <?php echo $row["provider_name"];?>
            </td>
            <td>
                <?php echo $row["customer_pakage"];?>
            </td>
            <td>
                <?php echo $row["description"];?>
            </td>
            <td>
                <?php echo $row["price"];?>
            </td>
            <td>
                <?php echo $row["active_on"];?>
            </td>
        </tr>

        <?php $i++; ?>
        <?php endforeach;?>
</body>
</html>