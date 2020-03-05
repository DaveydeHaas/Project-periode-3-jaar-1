<?php
// Schoonmaken data input
function sanitize($raw_data)
{
    // zoekt buiten de function naar $conn
    global $conn;
    // schoonmaken van de string op bijzondere tekens
    $data = mysqli_real_escape_string($conn, $raw_data);
    // Zorgt dat data geen scripts etc kan uitvoeren.
    $data = htmlspecialchars($data);
    // geeft $data terug 
    return $data;
}

// Salt
function RandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}
?>