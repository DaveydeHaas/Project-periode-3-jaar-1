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

?>