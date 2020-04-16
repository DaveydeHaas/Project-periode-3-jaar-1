<?php
$content = (isset($_GET['content'])?$_GET['content']:false); ?>
<nav class="navbar-background-color navbar-fontsize navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
      <a class="navbar-brand <?php if ($content == 'home') echo 'active'?>" href="index.php?content=home"><img
          src="./img/Logo.png" alt="Homepage Logo brandLogo" class="brand-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="col-10 collapse navbar-collapse no-padding" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php
              if(isset($_SESSION["id"]))
              {
                switch($_SESSION["userrole"])
                {
                  case 'admin':
                    echo'<li class="'; echo($content == "home") ? "active" : ""; echo'"><a href="./index.php?content=home">Home</a></li>';
                    echo'<li class="'; echo($content == "informatie") ? "active": ""; echo'"><a href="./index.php?content=informatie">Informatie</a></li>';
                    echo'<li class="'; echo($content == "spel") ? "active": ""; echo'"><a href="./index.php?content=spel">Spel</a></li>';
                    echo'<li class="'; echo($content == "contact") ? "active": ""; echo'"><a href="./index.php?content=contact">Contactpagina</a></li>';
                    echo'<li class="'; echo($content == "register") ? "active": ""; echo'"><a href="./index.php?content=register">Register</a></li>';
                    echo'<li class="'; echo($content == "a-home") ? "active": ""; echo'"><a href="./index.php?content=a-home">Playground</a></li>';
                  break;

                  case 'root':
                    echo'<li class="'; echo($content == "home") ? "active" : ""; echo'"><a href="./index.php?content=home">Home</a></li>';
                    echo'<li class="'; echo($content == "informatie") ? "active": ""; echo'"><a href="./index.php?content=informatie">Informatie</a></li>';
                    echo'<li class="'; echo($content == "spel") ? "active": ""; echo'"><a href="./index.php?content=spel">Spel</a></li>';
                    echo'<li class="'; echo($content == "contact") ? "active": ""; echo'"><a href="./index.php?content=contact">Contactpagina</a></li>';
                    echo'<li class="'; echo($content == "register") ? "active": ""; echo'"><a href="./index.php?content=register">Register</a></li>';
                    echo'<li class="'; echo($content == "a-home") ? "active": ""; echo'"><a href="./index.php?content=a-home">Playground</a></li>';
                  break;

                  case 'user':
                    echo'<li class="'; echo($content == "home") ? "active" : ""; echo'"><a href="./index.php?content=home">Home</a></li>';
                    echo'<li class="'; echo($content == "informatie") ? "active": ""; echo'"><a href="./index.php?content=informatie">Informatie</a></li>';
                    echo'<li class="'; echo($content == "spel") ? "active": ""; echo'"><a href="./index.php?content=spel">Spel</a></li>';
                    echo'<li class="'; echo($content == "contact") ? "active": ""; echo'"><a href="./index.php?content=contact">Contactpagina</a></li>'; 
                  break;

                  default:
                  break;
                }
              }
              else
              {
                echo'<li class="'; echo($content == "home") ? "active" : ""; echo'"><a href="./index.php?content=home">Home</a></li>';
                echo'<li class="'; echo($content == "informatie") ? "active": ""; echo'"><a href="./index.php?content=informatie">Informatie</a></li>';
                echo'<li class="'; echo($content == "contact") ? "active": ""; echo'"><a href="./index.php?content=contact">Contactpagina</a></li>';
              }
            
            ?>
            </div>
            <div class="col-1 collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-login">
            <?php
              if(isset($_SESSION["id"]))
              {
                echo '<li class="'; echo'"><a class="nav-profile">'; echo($_SESSION["username"]); echo'</a></li>';
                echo '<li class="'; echo ($content == "logout") ? "active" : ""; echo '"><a href="index.php?content=logout">Logout</a></li>';
              }
              else
              {
                echo'<li class="'; echo($content == 'login') ? "active" : ""; echo '"><a href="index.php?content=login">Login</a></li>';
                echo'<li  class="'; echo($content == 'registratie') ? "active": ""; echo '"><a href="index.php?content=registratie">Registratie</a></li>';  
              }
            ?>
          </ul>
        </div>
  </div>
</nav>