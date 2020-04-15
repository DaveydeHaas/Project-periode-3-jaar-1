<?php

?>
<!-- form registratie -->

<div class="container-fluid">
    <div class="row">

        <div class="col-4"></div>

        <div class="card col-4 registratie-margin-top registratie-margin-bottom">

            <div class="card-body">
                <div class="text-center">
                    <h1 class="card-title">Schizopedia</h1>
                    <h4 class="card-subtitle mb-2 text-muted">Sign up</h4>
                </div>

                <form action="./index.php?content=registratie_script" method="post">
                    <div class="form-container">
                        <div class="form-row">

                            <div class="form-group col-12">
                                <i class="fa fa-user"></i>
                                <label for="inputusername">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-envelope"></i>
                                <label for="inputusername">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputPassword4">Password</label>
                                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required>
                            </div>

                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputAddress">Verify Password</label>
                                <input type="password" name="cpass" class="form-control" id="inputVerifyPassword" placeholder="Verify Password" required>
                            </div>
                        </div>

                        <div class="form-row">
                        </div>

                        <button type="submit" class="btn btn-lg btn-block registratie-button" value="checkpassword">Sign me up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-4"></div>