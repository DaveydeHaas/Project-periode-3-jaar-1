<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

// messages voor registratie
switch($alert){
    case "no-email" :
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-email</h1>
        <hr>
        <p>U heeft geen email ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "no-username":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-username</h1>
        <hr>
        <p>U heeft geen username ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "no-pass":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-pass</h1>
        <hr>
        <p>U heeft geen password ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "no-cpass":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-cpass</h1>
        <hr>
        <p>U heeft geen verify password ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-email</h1>
        <hr>
        <p>U heeft geen email ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "":

    break;

    case "":

    break;

    case "":

    break;

    case "":

    break;

    case "":

    break;

    case "":

    break;

    case "":

    break;

    case "":

    break;

    case "":

    break;

    case "":
        
    break;


    default:
        header("Location: ./index.php?content=home");
    break;
}



?>