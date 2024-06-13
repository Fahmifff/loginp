<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "login_form";

    $db = mysqli_connect($hostname, $username, $password, $database_name);

    if ($db->connect_error) {
        echo "Koneksi rusak";
        die ("Error");
    }
?>