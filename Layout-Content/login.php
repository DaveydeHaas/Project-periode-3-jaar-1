<!-- form login -->
<div class="container-fluid">
  <div class="login">
    <form action="./index.php?content=login-script" method="post">
      <div class="container registratie-container">
        <div class="form-row">
          <div class="col-12">
            <H1>Login</H1>
          </div>
          <div class="form-group col-md-6">
            <i class="fa fa-lock"></i>
            <label for="inputusername">Username</label> <br>
            <input type="text" name="username" placeholder="Username/Email" id="username/Email" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <i class="fa fa-envelope"></i>
            <label for="inputusername">Password</label> <br>
            <input type="password" name="password" placeholder="Password" id="password" required>
          </div>
        </div>
      </div>
      <input type="submit" value="login">
  </div>
  </form>
</div>
</div>