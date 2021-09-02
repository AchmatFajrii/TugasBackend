<?php
session_start();
if(isset($_SESSION["username"])){
}else{
 echo header("location:login.php");
 
}?>

<!DOCTYPE html>
<html>
<head>
    <style>
body {
  background-color: #FFFFF0;
}
</style>
    <meta charset="utf-8">
    <title>Halaman Dashboard</title>
</head>
<body>
        Haloo Selamat Datang
</body>
</html>
