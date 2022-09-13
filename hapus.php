<?php

require 'function.php';
$id = $_GET["id_provider"];

 if (hapus($id) > 0){
    echo "<script> alert ('Berhasil'); 
    document.location.href = 'index.php'; </script>";
} 
else {
    echo "<script> alert ('Gagal'); 
    document.location.href = 'index.php'; </script>";
}

?>