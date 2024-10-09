Oefenen met koppeltabellen en CRUD

Dit programma is bedoeld als refresh voor studenten die moeite hebben om 
code te lezen en zelf code te bedenken. Het is een puur-php opdracht. Geen css (kan optioneel wel)
en geen JS (kan optioneel ook).

De werkvorm is interactief programmeren en vereist aanwezigheid en concentratie
van de student. 

Er wordt gebruik gemaakt van een database driver die reeds voorbereid is en universeel inzetbaar is
Later kan deze optioneel in een klasse worden aangeboden.


1) maak een database 'tweetabellen'
2) maak tabel eigenaars met eigenaars met id (AI), leigenaar, bijnaam
3) maak tabel games met id (AI), gamenaam, opmerking, id_eigenaar (FK)
4) geef alle rechten aan database tweetallen met username tweetallen en wachtwoord tweetallen
5) maak een map aan in htdocs met de naam tweetallen
6) zet in de map de database klasse Database
7) stel de toegangsgegevens in in dbase.php

100) maak een php programma read.php
101) include hierin database.inc.php (let op de juiste instellingen, zie 7)
102) bedenkt een query die alle data leest uit de twee tabellen:
    eigenaar, bijnaam, gamenaam, opmerking
103) test de query in phpmyadmin 
104) schrijf nu een paar programmaregels die gebruik maken van: 
    getData($p_sSql, $p_aData = "") 
        // execute query on Mysql server
        // $p_sSQL contains MySql query string
        // $p_aData contains array with query parameters
    var_dump de output
105) schrijf nu de code om met foreach() een tabel te maken zodat de data
    netjes op het scherm komt. Geen opmaak nog. 

400) maak een php programma creategebruiker.php dat via een formulier een nieuwe
    gebruiker aanmaakt. Toegepaste techniek is POST

500) maak een voeggametoe.php dat een game toevoegt aan een bestaande gebruiker
    de gebruiker selecteer je met een dropdown. Toegepaste techniek GET
501) Je selecteert in het programma een gebruiker en klikt dan op een OK knop.
    vervolgens krijg je een inputformulier voor een game dat je voor die gebruiker
    invoert. Tip: bewaar de id van de gebruiker in je schermen

600) maak een programma dat alle informatie van een gebruiker en alle games 
    op een scherm laat zien. Je selecteert de gebruiker met een dropdown

