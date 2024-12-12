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
    <title>Procesory</title>
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
              <a class="dropdown-item" href="płytygł.php">Sprzęt gamingowy</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edycjau.php">Edycja użytkownika</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="zdjecia/prrr4.jfif" alt="First slide">
            <div class="carousel-caption ">
              <h5>Procesor AMD Ryzen 5 5600G</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 3999 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/prrr2.png" alt="Second slide">
            <div class="carousel-caption ">
              <h5>Procesor AMD Ryzen 5 5600G</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 3999 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/prrr3.jpg" alt="Third slide">
            <div class="carousel-caption">
              <h5>Procesor AMD Ryzen 5 5600G</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 3999 złotych!</p>
            </div>
          </div>
        </div>
      </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="zdjecia/pr3.jpg" alt="First slide">
            <div class="carousel-caption ">
              <h5>Intel Core i7-12700K</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2999 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/pr1.jpg" alt="Second slide">
            <div class="carousel-caption ">
              <h5>Intel Core i7-12700K</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2999 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/pr2.jpg" alt="Third slide">
            <div class="carousel-caption">
              <h5>Intel Core i7-12700K</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2999 złotych!</p>
            </div>
          </div>
        </div>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="zdjecia/prr1.jfif" alt="First slide">
            <div class="carousel-caption ">
              <h5>Procesor INTEL Core i9-12900K</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2500 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/prr2.jpg" alt="Second slide">
            <div class="carousel-caption ">
              <h5>Procesor INTEL Core i9-12900K</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2500 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/prr3.jpg" alt="Third slide">
            <div class="carousel-caption">
              <h5>Procesor INTEL Core i9-12900K</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2500 złotych!</p>
            </div>
          </div>
        </div>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="zdjecia/int1.jpg" alt="First slide">
            <div class="carousel-caption ">
              <h5>Intel® Core™ i9-11900 BOX </h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2100 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/int2.jpg" alt="Second slide">
            <div class="carousel-caption ">
              <h5>Intel® Core™ i9-11900 BOX </h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 2100 złotych!</p>
            </div>
          </div>
        </div>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="zdjecia/int3.jpg" alt="First slide">
            <div class="carousel-caption ">
              <h5>Intel® Core™ i5-10600K BOX</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 1200 złotych!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="zdjecia/int4.jpg" alt="Second slide">
            <div class="carousel-caption ">
              <h5>Intel® Core™ i5-10600K BOX</h5>
              <b><p><a href="koszyk.php">Kup już teraz!</a></p></b>
              <p> Już od 1200 złotych!</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>