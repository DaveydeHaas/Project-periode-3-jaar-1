<?php
  // include connection and sanitize
  include("./php_scripts/db_connect.php");
  include("./php_scripts/functions.php");

  $username = sanitize($_POST['username']); // Username sanitizen (door mysql_real_escape_string & htmlspecialchars)
  $password = sanitize($_POST['pass']); // password sanitizen

  if (!empty($username)) {
    if (!empty($password)) {
      $sql = "SELECT * FROM `register` WHERE `username`='$username';"; // Selecteer user uit de database

      $checkdbuser = mysqli_query($conn, $sql); // Voert query select uit

      // Controleert of username bestaat
      if (mysqli_num_rows($checkdbuser) == 1) {
        $record = mysqli_fetch_assoc($checkdbuser);
        
        $pwh = $record['password'];

        // Controleert of wachtwoord overeenkomt met opgeslagen wachtwoord in database
        if (password_verify($password, $pwh)) {
          $userrole = $record["userrole"];
  
          $_SESSION["id"] = $record["id"];
          $_SESSION["userrole"] = $record["userrole"];
  
          switch ($userrole) {
            case 'regular':
              // Link door naar de homepage
              echo '<div class="alert alert-success" role="alert">Welkom '. $username .' ! U bent ingelogd als '. $userrole .' en zal nu worden doorgestuurd naar de homepage.</div>';
              header("Refresh: 4; url=./index.php?content=home");
            break;
            default:
              echo '<div class="alert alert-danger" role="alert">U bent niet ingelogd in een bepaalde gebruikersrol, U wordt doorgestuurd naar de standaardhomepage.</div>';
              header("Refresh: 4; url=./index.php?content=home");
            break;
          } 
        } else {
            echo '<div class="alert alert-danger" role="alert">Uw wachtwoord klopt niet. Probeer het opnieuw.</div>';
            header('Refresh: 4; url=index.php?content=login');
        }
      } else {
        echo '<div class="alert alert-danger" role="alert">Uw username klopt niet. Probeer het opnieuw.</div>';
        header('Refresh: 4; url=index.php?content=login');
      }
    } else {
      echo '<div class="alert alert-danger" role="alert">U heeft geen wachtwoord ingevuld. Alle velden zijn verplicht in te vullen.</div>';
      header('Refresh: 4; url=index.php?content=login');
    }
  } else {
    echo '<div class="alert alert-danger" role="alert">U heeft geen username ingevuld. Alle velden zijn verplicht in te vullen.</div>';
    header('Refresh: 4; url=index.php?content=login');
  }
?>