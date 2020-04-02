<?php

?>
<!-- form registratie -->
<form action="./index.php?content=registratie_script" method="post">
    <div class="container registratie-container">
        <div class="form-row">
            <div class="col-12">
                <H1>Registreren</H1>
            </div>
            <div class="form-group col-md-6">
                <i class="fa fa-user"></i>
                <label for="inputusername">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <i class="fa fa-envelope"></i>
                <label for="inputusername">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <i class="fa fa-lock"></i>
                <label for="inputPassword4">Password</label>
                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
                <i class="fa fa-lock"></i>
                <label for="inputAddress">Verify Password</label>
                <input type="password" name="cpass" class="form-control" id="inputVerifyPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
        </div>
        <button type="submit" class="btn registratie-button" value="checkpassword">Sign up</button>
    </div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>