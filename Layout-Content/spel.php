<?php
//authorization
include("./php_scripts/functions.php");

is_authorized(["admin", "root", "user"]);

?>
<!-- game -->
<div class="col-xl-12 col-md-9 col-lg-9 col-sm-6" >
<iframe class="iframe-game" src="./game/webGL"></iframe>
</div>
<!-- handleiding -->