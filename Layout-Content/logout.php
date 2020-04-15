<?php 
    //maakt de laden van het $_SESSION array leeg met unset
    unset($_SESSION["id"]);
    unset($_SESSION["userrole"]);
    unset($_SESSION["username"]);
    var_dump($_SESSION);

    //verwijderd het session_start bestand in c:/wamp64/tmp
    session_destroy();

    header("Location: ./index.php?content=message&alert=logout");
?>