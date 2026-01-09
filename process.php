<?php
include "config.php";
$user=$_SESSION['user'];
$n=$_POST['nominal'];
$m=$_POST['metode'];

mysqli_query($conn,"UPDATE users SET saldo=saldo-$n WHERE username='$user'");
mysqli_query($conn,"INSERT INTO transaksi(username,nominal,metode) VALUES('$user','$n','$m')");

header("Location: dashboard.php");