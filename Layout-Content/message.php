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

    case "email-exists":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>email-exists</h1>
        <hr>
        <p>Het ingevoerde email adress bestaat al probeer dit later opnieuw.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "register-complete":
        echo '
        <div class="alert alert-success" role="alert">
        <br>
        <h1>register-complete</h1>
        <hr>
        <p>U bent succesvol geregistreerd op de webstie Schizopedia</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;

    case "register-error":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>register-error</h1>
        <hr>
        <p>Er is iets fout gegaan probeer dit later opnieuw. <br> Als deze fout zich voor blijft doen neem contact op met de server admin.</p>
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


    default:
        header("Location: ./index.php?content=home");
    break;
}



?>