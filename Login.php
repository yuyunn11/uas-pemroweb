<?php 
error_reporting(0);
require 'Koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users 
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
    header("Location: index.php");  
} else{
    echo "<br><br><br><br><center><h1>Username atau Password Anda Salah</h1>
            <button><strong><a href = 'Foodies Goodies.html'>Login</a></strong></button></center>";

    }
