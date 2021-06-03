<?php 

class Gebruiker{

    private $gebruikersId = 0;
    private $gebruikersnaam = '';
    private $voornaam = '';
    private $achternaam = '';
    private $gebruikersGroup = '';

    public function __construct(){
        if($_SESSION['gebruikersnaam']){
            $this->gegevensInvullen(); //here
            return true;
        }else{
            header('Location: login.php');
            return false;
        }
    }

    private function gegevensInvullen(){
       
        $gebruikers = DemoData::demoGebruikers();

        if(!$_SESSION['gebruikersnaam']){
            HEADER('Location: login.php');
            return false;
        }

        foreach ($gebruikers as $key => $gebruiker) {
            if($gebruiker['gebruikersnaam'] == $_SESSION['gebruikersnaam']){

                 $this->gebruikersId = $gebruiker['gebruikersId'];
                 $this->gebruikersnaam = $gebruiker['gebruikersnaam'];;
                 $this->voornaam = $gebruiker['voornaam'];
                 $this->achternaam = $gebruiker['achternaam'];
                 $this->gebruikersGroup =$gebruiker['gebruikersGroup'];
                
            }
            
        }
    }

    public function gegevensOphalen(){
        $gebruiker = [];
        $gebruiker['gebruikersId'] = $this->gebruikersId;
        $gebruiker['gebruikersnaam'] = $this->gebruikersnaam;
        $gebruiker['voornaam'] = $this->voornaam;
        $gebruiker['achternaam'] = $this->achternaam;
        $gebruiker['gebruikersGroup'] = $this->gebruikersGroup;

        return $gebruiker;
    }

}

?>