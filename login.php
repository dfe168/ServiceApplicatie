<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="sidenav">
            <div class="login-main-text">
                <img src="./img/it.jpg" alt="" width="250" >
                
                <h2>ServiceApplicatie (Demo)</h2>
                <ul>
                    <li>
                    <b>Klant: </b>
                        (gebruikersnaam: <b>bart</b> / wachtwoord: <b>klant</b>)
                    </li>
                    <li>
                        <b>Servicemedewerker: </b>
                        (gebruikersnaam: <b>sofie</b> / wachtwoord: <b>service</b>)
                    </li>
                    <li>
                    <b>Servicemonteur: </b>
                        (gebruikersnaam: <b>tim</b> / wachtwoord: <b>monteur</b>)
                    </li>
                </ul>
            </div>
        </div>

        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                <form action="auth.php" method="POST">
                    <div class="form-group">
                        <label>Gebruikersnaam</label>
                        <input type="text" name="gebruikersnaam" class="form-control" placeholder="Naam" >
                    </div>
                    <div class="form-group">
                        <label>Wachtwoord</label>
                        <input type="password" name="wachtwoord" class="form-control" placeholder="Wachtwoord">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-dark btn-md mt-3" >
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>