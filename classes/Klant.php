<?php

class Klant extends Gebruiker{
    private $klantnr;
    private $bedrijfsnaam = '';
    private $adres = '';
    private $telefoon = '';
    private $email = '';

    private function zoekKlant($klantnr){
       
        try {
            $klanten = DemoData::demoKlanten();

            foreach ($klanten as $key=>$klant) {
                if($klant["klantnr"] == $klantnr){
                     $this->klantnr = $klant['klantnr'];
                     $this->bedrijfsnaam = $klant['bedrijfsnaam'];;
                     $this->adres = $klant['adres'];
                     $this->telefoon = $klant['telefoon'];
                     $this->email =$klant['email'];
                }
            }
            return true;

        } catch (Throwable $th) {
            return false;
        }
        
    }
    
    public function gegevensBekijken($klantnr){
        
        $klant = array(
            "klantnr" => $this->klantnr,
            "bedrijfsnaam" => $this->bedrijfsnaam,
            "adres"=>$this->adres,
            "telefoon" => $this->telefoon,
            "email"=> $this->email
            );
        return $klant;
    }
}