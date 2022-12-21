<?php

$host = "localhost";
$dbname = "pweb-crud";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, $dbname);
if (!$db){
    die("<script>alert('Gagal menyambungkan ke server!') </script>");
}