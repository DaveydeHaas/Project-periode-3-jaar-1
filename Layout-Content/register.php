<?php
//Maakt verbinding met de database
include("./php_scripts/db_connect.php");

//authorization
include("./php_scripts/functions.php");

is_authorized(["admin", "root"]);

// $sql dat gegevens doorstuurt naar de tabel `pro2_aanmelden`
$sql = "SELECT * FROM `register`";

// Functie die via verbinding $conn gegevens opvraagt van database 'pro2_aanmelden'.
$result = mysqli_query($conn, $sql);

// Lege variabele string waar we de record continu blijven ingooien.
$records = "";

// alle data in database worden weergegeven d.m.v. while loop.
while ($record = mysqli_fetch_assoc($result)) {
  $records .= "<tr><td scope='row'>" . $record["id"] . "</td>
                  <td>" . $record["username"] . "</td>
                  <td>" . $record["email"] . "</td>
                  
                  </td></tr>";
};

?>

<div class="container-fluid">
  <div class="container">
    <div class="row form">
      <div class="col-12">
        <h1 class="mt-4 text-center">Overzichtspagina</h1>
        <table class="table table-hover mt-4">
          <thead class="tb-blue">
            <tr class="register">
              <th scope="col">Id</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php echo $records ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>