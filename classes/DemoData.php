<?php

class DemoData{


    public static function demoGebruikers(){
        $data = json_decode(file_get_contents("DB_voorbeeld_data.json"),true);
        return $gebruikers = $data['data']['gebruiker'];
    }

    public static function demoKlanten(){
        $data = json_decode(file_get_contents("DB_voorbeeld_data.json"),true);
        return $data = $data['klant'];
    }
    


}