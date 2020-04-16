<!--contact formulier -->

<!-- form login -->

<div class="container-fluid">
  <div class="row">

    <div class="col-3"></div>

    <div class="card col-6 registratie-margin-top registratie-margin-bottom">

      <div class="card-body">
        <h1 class="card-title text-center">Schizopedia</h1>
        <BR>
        <hr>
        <h4 class="card-subtitle mb-2 text-muted text-center">Contact informatie</h4>
        <div class="card-body">
          <div class="col-12 mx-auto">
            <li><b>Telefoon:</b> 030 000 0001</li>
            <li><b>Email:</b> schizo@pedia.com</li>
            <li><b>Whatsapp:</b> 06-00000001</li>
            <li><b>Adres:</b> 01 Schilaan Utrecht 0001WC Netherlands</li>
          </div>

        </div>
        <hr>
        <h4 class="card-subtitle mb-2 text-muted text-center">Contact formulier</h4>
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