<?php
//authorization
include("./php_scripts/functions.php");

is_authorized(["admin", "root", "user"]);

?>
<!-- game -->
<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <div class="col-xl-12 col-md-9 col-lg-9 col-sm-6">
            <iframe class="iframe-game" src="./game/webGL"></iframe>
        </div>
    </div>
</div>

<!-- handleiding -->
<div class="container">
    <div class="row">
        <div class="col-12"></div>
        <div class="handleiding-margin">
            <h1>Handleiding</h1>
            <hr class="split">
            <h3>Vooraf </h3>
            <p>Je speelt het spel als iemand met schizofrenie. Je probeert de dag door te komen zonder zelf gek te worden.
               In deze game is het belangrijk dat je de juiste keuzes maakt.Je gaat bijvoorbeeld rustig zitten of gaat tv kijken.
               Maar pas op. Als je een foute keuze maakt zul je dat merken. Ook het geluid speelt een rol in dit spel. De muziek geeft het spel een erg spannend effect. </p>
            <hr class="split">
            <h3>Controls </h3>
            <p>Je gebruikt de w,a,s,d, toetsen om heen en weer te lopen en de spatiebalk om te springen. Deze instellingen zijn te veranderen als je op esc klikt. Voor interactie klik je op de linker-muisknop. </p>
            <hr class="split">
            <h3>Levels  </h3>
            <p>Als je dag 1 hebt overleefd mag je door naar het volgende level. Per level gaat de tijd steeds sneller.Maar pas op als je teveel fouten maakt komen er waanbeelden en ben je af. </p>
            <hr class="split">
            <h3>Doel </h3>
            <p>Het doel van dit spel is is om mensen bewust te maken wat mensen met schizofrenie doormaken. Dit doen wij om te laten zien hoe zij het dagelijks leven ervaren.</p>
        </div>
    </div>
</div>