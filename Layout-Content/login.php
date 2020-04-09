<!-- form login -->
<form action="./index.php?content=login_script" method="post">
    <div class="container form-container">
        <div class="form-row">
            <div class="col-12">
                <H1>Inloggen</H1>
            </div>
            <div class="form-group col-md-4">
                <i class="fa fa-user"></i>
                <label for="inputusername">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <i class="fa fa-lock"></i>
                <label for="inputPassword4">Password</label>
                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required>
            </div> 
        </div>
        <div class="form-row">
        </div>
        <button type="submit" class="btn registratie-button" value="checkpassword">Log in</button>
    </div>
</form>