<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"> <img src="../img/beeldmerk.ico" alt=""> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=storingen">Storingen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=afspraakbevestigen">Afspraken</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gegevens
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Klantgegevens opzoeken</a></li>
            <li><a class="dropdown-item" href="#">Contracten bekijken</a></li>
            <li><a class="dropdown-item" href="#">Klantgegevens wijzigen</a></li>
          </ul>
        </li>
        </ul>
      <form class="d-flex" action="logout.php" >
        <button class="btn btn-dark">Uitloggen</button>
      </form>
    </div>
  </div>
</nav>