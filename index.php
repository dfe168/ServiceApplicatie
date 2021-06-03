<?php
    include './init.php';
    include './components/header.php';
    include './components/footer.php';
    start();
    
function start(){
    if(!ingeloged()){
        header('Location: ./login.php');
    }
    $gebruiker = new Gebruiker();
    $gebruikersgroup = $gebruiker->gegevensOphalen()['gebruikersGroup'];
    //echo $gebruikersgroup;

    switch ($gebruikersgroup) {
        case 'klant':
            require_once('./pages/klant/home.php');
            break;
            case 'service':
                require_once('./pages/service/home.php');
                break;
            case 'monteur':
                require_once('./pages/monteur/home.php');
                break;
        default:
            # code...
            break;
    }
}

function ingeloged(){
    if(!$_SESSION['gebruikersnaam']){
        return false;
    }
    return true;
    
}


?>



