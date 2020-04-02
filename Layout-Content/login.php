<!-- form login -->
<div class="container-fluid">
  <div class="login">
    <h1>Admin - Login</h1>
    <form action="./index.php?content=login-script" method="post">
      <label for="username">
        <i class="fa fa-user"></i>
      </label>
      <input type="text" name="username" placeholder="Username/Email" id="username/Email" required>
      <label for="password">
        <i class="fa fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="login">
    </form> 
  </div>
</div>