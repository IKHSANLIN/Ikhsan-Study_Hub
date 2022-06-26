<?php
$servername = "localhost";
$username = "root";
$pass = "";
$database = "rental";

$conn = new mysqli($servername, $username, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>