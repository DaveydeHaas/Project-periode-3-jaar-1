<?php $content = (isset($_GET['content'])?$_GET['content']:false); ?>
<nav class="navbar-background-color navbar-fontsize navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
      <a class="navbar-brand <?php if ($content == 'home') echo 'active'?>" href="index.php?content=home"><img
          src="./img/logo.png" alt="Homepage Logo brandLogo" class="brand-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="<?php if ($content == 'home') echo 'active'?>">
            <a href="./index.php?content=home">Home</a></li>
          <li class="<?php if ($content == 'informatie') echo 'active'?>">
            <a href="./index.php?content=informatie">Informatie</a></li>
          <li class="<?php if ($content == 'spel') echo 'active' ?>">
            <a href="index.php?content=spel">Spel</a></li>
          <li class="<?php if ($content == 'highscores') echo 'active' ?>">
            <a href="index.php?content=highscores">Topscores</a></li>   
        </ul>

        <ul class="navbar-login">
          <li style="" class="<?php if ($content == 'login') echo 'active' ?>">
            <a href="index.php?content=login">Login</a></li>
          <li style="" class="<?php if ($content == 'registratie') echo 'active' ?>">
            <a href="index.php?content=registratie">Registratie</a></li>  
        </ul>
      </div>
  </div>
</nav>