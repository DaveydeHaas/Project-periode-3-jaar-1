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
                
                $email = sanitize($_POST["email"]);
                $username = sanitize($_POST["username"]);
                $password = sanitize($_POST["pass"]);
                
                $sql = "SELECT * FROM `register` WHERE `email` = '$email'";
                //$sql = "SELECT * FROM `register` WHERE `password` = '$password'";
                //$sql = "SELECT * FROM `register` WHERE `username` = '$username'";
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result))
                {
                    //email bestaat al
                    header("Location: ./index.php?content=message&alert=email-exists");
                }
                else
                {
                    //email adress toegevoegen aan de tabel
                    echo password_hash($password, PASSWORD_BCRYPT);

                    $sql = "INSERT INTO `register` (`id`, `email`. `password`, `userrole`)(NULL, '$email', 'password_hash', 'user')"
                }
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

