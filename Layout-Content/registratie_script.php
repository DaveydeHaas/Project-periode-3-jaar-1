<?php
if(empty($_POST["username"]))
{
    header("Location: ./index.php?content=message&alert=no-username");
}
else
{
    if(empty($_POST["email"]))
    {
        header("Location: ./index.php?content=message&alert=no-email");
    }
    else
    {
        if(empty($_POST["pass"]))
        {
            header("Location: ./index.php?content=message&alert=no-pass");
        }
        else
        {
            if(empty($_POST["cpass"]))
            {
                header("Location: ./index.php?content=message&alert=no-cpass");
            }
            else
            {
                include("./php_scripts/db_connect.php");
                include("./php_scripts/functions.php");
            }
        }
    }
}



 // filtert de post data
//$email sanitize($_POST["email"]);
//$username sanitize($_POST["username"]);

// haalt de post data op
//$sqlemail = "SELECT * FROM `register` WHERE `email` = $email";
//$sqlusername = "SELECT * FROM `register` WHERE `username` = $username";

//myslqi_query($conn, $sql);
?>

