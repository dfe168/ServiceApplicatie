<?php
include './init.php';


 $gebruikersnaam = $_POST['gebruikersnaam'];
 $wachtwoord = $_POST['wachtwoord'];

if(!Login::inloggen($gebruikersnaam, $wachtwoord)){
    echo "<h1>Gebruikersnaam of wachtwoord is onjuist.</h1>";
}



?>