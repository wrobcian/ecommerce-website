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
    <title>Kontakt</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
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

  <header>

    <section>
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=Limanowa&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"></iframe>
      </div>
    </section>
  </header>
  <main>
    <div class="container-fluid mb-5">
      <div class="row" style="margin-top: -100px;">
        <div class="col-md-12">
          <div class="card pb-5">
            <div class="card-body">
              <div class="container">
                <section class="section">
                  <h2 class="font-weight-bold text-center h1 my-5">Skontaktuj sie z nami</h2>

                  <p class="text-center grey-text mb-5 mx-auto w-responsive">Masz jakieś pytania? Skontaktuj sie z nami wysyłając nam swoje uwagi. Jeden z naszych pracowników na pewno odezwie się w ciągu najbliższych 24 godzin.</p>

                  <div class="row pt-5">
                    <div class="col-md-8 col-xl-9">
                      <form>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="md-form">
                                <label for="contact-name" class="">Twój nick</label>
                              <input type="text" id="contact-name" class="form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="md-form">
                                <label for="contact-email" class="">Twój mail</label>
                              <input type="text" id="contact-email" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form">
                                <label for="contact-Subject" class="">Temat</label>
                              <input type="text" id="contact-Subject" class="form-control">
                            </div>
                          </div>
                        </div>
                        

                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form">
                                <label for="contact-message">Twoja wiadomość</label>
                              <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                            </div>
                            <div class="text-center text-md-left my-4">
                                <input type="submit">
                              </div>
                          </div>
                        </div>
                      </form>
                    </div>


                    <div class="col-md-4 col-xl-3">
                      <ul class="contact-icons text-center list-unstyled">
                        <li>
                          <i class="fas fa-map-marker fa-2x orange-text"></i>
                          <p>Limanowa, 34-600, Małopolska</p>
                        </li>
                        <li>
                          <i class="fas fa-phone fa-2x orange-text"></i>
                          <p>234 153 423</p>
                        </li>

                        <li>
                          <i class="fas fa-envelope fa-2x orange-text"></i>
                          <p>kontakt@projekt.com</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>