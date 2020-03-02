<div class="container-fluid">

    <div class="row centered-form text-center">
        <div class="col-3"></div>
        <div class="col-6 registratie-margin">
            <div class="panel panel-default">
            <div class="panel-heading">
			    		<h3 class="panel-title">Registratie formulier<br><br></h3>
			 			</div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="voor_naam" id="voor_naam" class="form-control input-sm" placeholder="Voornaam" required>
                                </div>
                            </div>
    
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="tussenvoegsel" id="tussenvoegsel" class="form-control input-sm" placeholder="Tussenvoegsel">
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="achter_naam" id="achter_naam" class="form-control input-sm" placeholder="Achternaam" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder=" Bevestigd Email Address" required>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="wachtwoord" id="wachtwoord" class="form-control input-sm" placeholder="Wachtwoord" minlength="4" maxlength="8" required>
                                    <small id="wachtwoordHelp" class="form-text text-muted">Min 4 / Max 8 characters</small>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="wachtwoord_bevestigd" id="wachtwoord_bevestigd" class="form-control input-sm" placeholder="Bevestigd wachtwoord" minlength="4" maxlength="8" required>
                               
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Registreren" class="btn btn-outline-dark btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-3"></div>

</div>