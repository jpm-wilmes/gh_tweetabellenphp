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
401) maak een testplan, testscenario en testverslag van dit onderdeel in één Word document.
    gebruik template!

500) maak een voeggametoe.php dat een game toevoegt aan een bestaande gebruiker
    de gebruiker selecteer je met een dropdown. Toegepaste techniek GET
501) Je selecteert in het programma een gebruiker en klikt dan op een OK knop.
    vervolgens krijg je een inputformulier voor een game dat je voor die gebruiker
    invoert. Tip: bewaar de id van de gebruiker in je schermen

600) maak een programma dat alle informatie van een gebruiker en alle games 
    op een scherm laat zien. Je selecteert de gebruiker met een dropdown

700) het einde is in zicht. Maak een scherm van alle gebruikers. Als je op een gebruiker klikt
    opent een nieuw scherm met alle games. Je kunt hier games aanmaken voor de gebruiker,
    games verwijderen van een gebruiker en games wijzigen van een gebruiker.
701) maak een TO voor dit onderdeel. Maak gebruik van de template
702) maak de 3 testdocumenten voor dit onderdeel. Maak gebruik van de template
703) schrijf de code voor de lijst van gebruikers
704) maak voor elke gebruiker een doorverwijsknop naar het programm lijstgames.php
705) maak vervolgens het programma lijstgames.php dat de CRUD voor de games bevat.
    voor elke game staat een wijzig of verwijder icoontje
    bovenin staat een knop om een game toe te voegen
    De toegevoegde game hoort alleen bij de gebruiker waarvoor deze wordt toegevoegd

1000) maak een presentatie waarin je je opgebouwde kennis laat zien. Met screenshots 
    leg je uit wat je hebt gemaakt en in de laatste sheet vertel je wat je hebt geleerd.

2000) als je alles klaar hebt kun je aan de volgende onderdelen beginnen
2001) maak een eenvoudige layout voor het programma. Je mag hiervoor een framework kiezen
2002) ga in plaats van de form knoppen gebruik maken van JS
2003) In opdracht 700) wordt een nieuw browserscherm geopend voor de games. Maak in
    plaats hiervan een JS pop-up
