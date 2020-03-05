<?php 
  // Includen van DB connectie en functies
  include './php_scripts/connectDB.php';
  include './php_scripts/functions.php';

  // Variabelen maken van ingevoerde data (enkel admin account kan gemaakt worden)
  $username = 'admin';
  $password = 'admin';

  // Genereren van random string en password_hash
  $salt = RandomString();
  $hash = password_hash($salt.$password, PASSWORD_BCRYPT);

  // Inserten in database
  $sql = "INSERT INTO `pro2_users` (`id`, `username`, `password`, `salt`, `userrole`) VALUES (NULL, '$username', '$hash', '$salt', 'admin');";
  $result = mysqli_query($conn, $sql);

  // Resultaat en doorverwijzing als insert is gelukt/niet gelukt
  if ($result) {
    echo '<div class="alert alert-success" role="alert">Bedankt voor het maken van uw account!</div>';
    header("Refresh: 3 ; url=./index.php?content=login");
  } else {
    echo '<div class="alert alert-danger" role="alert">Het is niet gelukt een admin account aan te maken.</div>';
    header('Refresh: 3; url=index.php?content=login');
  }
?>