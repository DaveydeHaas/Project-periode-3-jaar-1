<!--contact formulier -->

<!-- form login -->

<div class="container-fluid">
  <div class="row">

    <div class="col-3"></div>

    <div class="card col-6 registratie-margin-top registratie-margin-bottom">

      <div class="card-body">
        <div class="text-center">
          <h1 class="card-title">Schizopedia</h1>
          <h4 class="card-subtitle mb-2 text-muted">Contact formulier</h4>
          <hr>
          <?php
            $Msg = "";
            if(isset($_GET['error']))
            {
                $Msg = "Please fill in the blanks ";
                echo '<div class="alert alert-danger">'.$Msg.'</div>';
            }
          ?>
        </div>
          <div class="card-body">
            <form action="./index.php?content=process" method="post">
              <input type="text" name="UName" placeholder="Gebruikersnaam" class="form-control mb-2">
              <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
              <input type="text" name="Subject" placeholder="Onderwerp" class="form-control mb-2">
              <textarea name="msg" class="form-control" placeholder="Uw bericht"></textarea>
              <br>
              <button class="btn btn-lg btn-block registratie-button" name="btn-send"> Verzend </button>
            </form>
          </div>

      </div>
    </div>

<div class="col-3"></div>

</div>
</div>

