<?php
    //Inloggen op database en database selecteren

    define("SERVERNAME", "localhost");
    define("USERNAME", "Admin");
    define("PASSWORD", "qtHZhSfuSRE7JDH0");
    define("DATABASE", "pro3");

//Contact makem met MySQL-Server
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);
?>