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
    //trimt de data van spaties
    $data = trim($data);
    // geeft $data terug 
    return $data;
}

function is_authorized($userroles)
{
    if(!isset($_SESSION["id"]))
    {
        return header("Location: ./index.php?content=message&alert=auth-error");
    }
    elseif(!in_array($_SESSION["userrole"], $userroles))
    {
        return header("Location: ./index.php?content=message&alert=auth-error");
    }
    else
    {
        return true;
    }

}

?>