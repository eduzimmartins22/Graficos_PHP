<?php
$servername = "https://demo.phpmyadmin.net/master-config/public/index.php?route=/sql&pos=0&db=+baseTest&table=BaseTest";
$database = "baseTest";
$username = "root";
$password = "";
$conecxao = mysqli_connect($servername,$username, $password ,$database); // Só nessa ordem para dar certo
?>