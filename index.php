<?php
    include_once ('heads/head.startsida.php');
    include_once ('nav.fot/navbar.php');
    include_once ('nav.fot/whitebar.php');
?>
<div class="startsidawrapped">

    <div class="startwelcome">

        <div class="start-text">

            <h1>Böner är <br> bara början</h1>

            <p>
                Kaffe är roten till allt gott, tänker vi. Det är här allt börjar.
                Sen kommer det något gott vid sidan om (t.ex. en nybakad kanelbulle!),
                såklart bakat i vårt eget bageri och serverat av en av våra härliga och passionerade Baristor.
                Ja, det är så det är hemma hos oss. Välkommen!
            </p>
        </div>

        <img src="../images/womancoffee.jpg" alt="">

    </div>

</div>




<?php
    include_once "errors.php";
    include_once ('nav.fot/footer.php');
?>

<!--
TODO:
- Visa användaren att den har loggat in genom att till exempel döpa om Account till anv namn efter inloggning
- Skicka användaren till sina erbjudanden efter registrering.
- Låta användaren ta del av sina särskilda erbjudanden (* 0.85).
"Välkomnen anv namn"! Specialerbjudanden för dig som medlem:".
Skapa någon funktion för att generera medlemmars specialerbjudanden och kommentera koden.

Vad gäller erbjudande i front end: Skapa en mer utförlig beskrivning av en eller två produkter med tex en liten "mer" knapp.
-->
