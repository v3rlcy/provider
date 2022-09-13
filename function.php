<?php

$conn = mysqli_connect("localhost", "root", "", "db_provider");
function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $provider_name = htmlspecialchars($data["provider_name"]);
    $customer_pakage = htmlspecialchars($data["customer_pakage"]);
    $description = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $active_on = htmlspecialchars($data["active_on"]);

    $query = "INSERT  INTO tb_providerinternet VALUES ('', '$provider_name', '$customer_pakage', '$description', '$price', '$active_on')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id_provider"];
    $provider_name = htmlspecialchars($data["provider_name"]);
    $customer_pakage = htmlspecialchars($data["customer_pakage"]);
    $description = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $active_on = htmlspecialchars($data["active_on"]);

    $query = "UPDATE tb_providerinternet SET 
    provider_name = '$provider_name', 
    customer_pakage = '$customer_pakage', 
    description = '$description', 
    price = '$price', 
    active_on = '$active_on'
    WHERE id_provider = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
};

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_providerinternet WHERE id_provider = $id");
    return mysqli_affected_rows($conn);
};


?>