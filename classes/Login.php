<?php
class Login{

    public static function inloggen($gebruikersnaam, $wachtwoord){
        $gebruikers = DemoData::demoGebruikers();
        foreach ($gebruikers as $gebruiker) {
            if($gebruiker['gebruikersnaam'] === $gebruikersnaam && $gebruiker['wachtwoord'] === $wachtwoord){
                echo $gebruiker['gebruikersnaam'];
                $_SESSION['gebruikersnaam'] = $gebruikersnaam;
                header('Location: index.php');
                return true;
            }          
        }
        return false;
    }

    public static function uitloggen(){
            session_destroy();
    }

}

?>