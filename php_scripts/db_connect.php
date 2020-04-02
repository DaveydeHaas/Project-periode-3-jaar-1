<?php
    //Inloggen op database en database selecteren

    define("SERVERNAME", "localhost");
    define("USERNAME", "Davey");
    define("PASSWORD", "KleineG1ngerV2");
    define("DATABASE", "project3");

//Contact makem met MySQL-Server
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);
?>