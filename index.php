<?php
    session_start();

    if(!isset($_SESSION['zalogowany'])) {
        header('location: logowanie.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" >
    <title>Strona główna</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: black !important">
      <a class="navbar-brand" href="index.php">Strona główna</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Wyloguj sie<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="koszyk.php">Koszyk</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produkty
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="kartygraf.php">Karty graficzne</a>
              <a class="dropdown-item" href="procesory.php">Procesory</a>
              <a class="dropdown-item" href="płytygł.php">Płyty główne</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edycjau.php">Edycja użytkownika</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="zdjecia/kg1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Najlepsze karty graficzne</h5>
            <p>tylko u nas</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="zdjecia/kg2.jpeg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Najniższe ceny jakie są na rynku</h5>
            <p>tylko u nas</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="zdjecia/kg3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Najnowocześniejsze karty graficzne</h5>
            <p>tylko u nas</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</body>
</html>