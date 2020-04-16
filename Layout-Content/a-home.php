<?php

    include("./php_scripts/functions.php");
    //authorization
    is_authorized(["admin", "root"]);

    //deze pagina heeft als doeleinden tests voor live services
    var_dump($_SESSION);

    //unset($_SESSION["id"]);
    //unset($_SESSION["userrole"]);
    //unset($_SESSION["username"]);
    //session_destroy();
?>