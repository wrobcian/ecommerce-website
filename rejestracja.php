<?php 
  session_start();

  if (isset($_POST['email'])) {
    //udana walidacja/tak
    $wszystko_ok=true;
    //sprawdzenie nicku
    $nick=$_POST['nick'];
    //dl nicku
    if (strlen($nick)<3 || (strlen($nick)>20)) {
      $wszystko_ok=false;
      $_SESSION['e_nick']="Nazwa musi posiadać od 3 do 20 znaków!";
    }

    if (ctype_alnum($nick)==false) {
      $wszystko_ok=false;
      $_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
    }
    //poprawnosc emaili
    $email=$_POST['email'];
    $emailb=filter_var($email, FILTER_SANITIZE_EMAIL);
    if((filter_var($emailb, FILTER_SANITIZE_EMAIL)==false) || ($emailb!=$email)) {
      $wszystko_ok=false;
      $_SESSION['e_email']="Podaj poprawny edres email";
    }

    //poprawnosc hasla
    $haslo1=$_POST['haslo1'];
    $haslo2=$_POST['haslo2'];

    if ((strlen($haslo1)<8) || (strlen($haslo1)>20)) {
      $wszystko_ok=false;
      $_SESSION['e_haslo']="Hasło musi zawierać od 8 do 20 znaków";
    }
   
    if($haslo1!=$haslo2){
      $wszystko_ok=false;
      $_SESSION['e_haslo']="Hasła nie są takie same";
    }


    $znaki = '/[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]+$/';
    $kodp='/^[0-9]{2}[-][0-9]{3}+$/';
        $KodPocztowy = $_POST["kodPocztowy"];
        if(preg_match($kodp, $KodPocztowy)==false) 
            {
                $wszystko_ok=false;
                $_SESSION['eKod']="Kod pocztowy zawiera nie dozwolne znaki";
            };
    
     $Miejscowosc = $_POST['miejscowosc'];
      if(preg_match($znaki,$Miejscowosc)==false) 
          {
            $wszystko_ok=false;
            $_SESSION['eMiejscowosc']="Miejscowosc posiada niewłaściwe znaki";
          }

          $NrDomu = $_POST['nrdomu'];

    $haslo_hash=password_hash($haslo1, PASSWORD_DEFAULT);

    require_once"connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT);


    try {
      $polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
      if($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
      } else {
        //czy email juz istnieje?
        $rezultat = $polaczenie->query("SELECT uzytkownicy_id FROM uzytkownicy WHERE email='$email'");

        if (!$rezultat) throw new Exception($polaczenie->error);

        $ile_takich_maili = $rezultat->num_rows;
        if($ile_takich_maili>0) {
          $wszystko_ok=false;
          $_SESSION['e_email']="Istnieje już konto przypisane do tego mailu!";
        }

        //czy nick juz istnieje?
        $rezultat = $polaczenie->query("SELECT uzytkownicy_id FROM uzytkownicy WHERE nazwa='$nick'");

        if (!$rezultat) throw new Exception($polaczenie->error);

        $ile_takich_nickow = $rezultat->num_rows;
        if($ile_takich_nickow>0) {
          $wszystko_ok=false;
          $_SESSION['e_nick']="Istnieje już konto o takim nicku!";
        }

        if ($wszystko_ok==true) { 
          if($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '$email', '$Miejscowosc', '$KodPocztowy', '$NrDomu')")) {
            $_SESSION['udanarejestracja']=true;
            header('Location: udanar.php');
          } else {
            throw new Exception($polaczenie->error);
          }
        }

        $polaczenie->close();
      }
    }
    catch(Exception $e){
      echo '<span style:"color:red;">bląd serwera</span>';
      echo '<br>Info: '.$e;
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" >
    <title>Rejestracja</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styleee.css" rel="stylesheet" type="text/css">
    
    <style>
      .error {
        color: red;
      }
      </style>
</head>
<body>
    <section class="intro">
        <div class="bg-image h-100">
          <div class="mask d-flex align-items-center h-100">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 col-xl-6">
                  <div class="card mask-custom">
                    <div class="card-body p-5 text-white">
      
                      <div class="my-4">
      
                        <h2 class="text-center mb-5">Rejestracja</h2>
      
                        <form method="post">
                          <!--nazwa -->
                            <div class="form-outline form-white mb-4">
                              <div class="form-outline form-white">
                                <input type="text" name="nick" id="form3Example1" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1">Nazwa</label>
                              </div>
                              <?php
                              if (isset($_SESSION['e_nick'])) {
                                echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
                                unset($_SESSION['e_nick']);
                              }
                            ?>
                            </div>

                          
                          <!--Email-->
                          <div class="form-outline form-white mb-4">
                            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example3">Adres email</label>
                            <?php
                              if (isset($_SESSION['e_email'])) {
                                echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                                unset($_SESSION['e_email']);
                              }
                            ?>
                          </div>

                        
                          <!-- Haslo-->
                          <div class="form-outline form-white mb-4">
                            <input type="password" name="haslo1" id="form3Example4" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4">Hasło</label>
                            <?php
                              if (isset($_SESSION['e_haslo'])) {
                                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                                unset($_SESSION['e_haslo']);
                              }
                            ?>
                          </div>

                          <div class="form-outline form-white mb-4">
                            <input type="password" name="haslo2" id="form3Example4" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4">Powtórz hasło</label>
                            <?php
                              if (isset($_SESSION['e_haslo'])) {
                                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                                unset($_SESSION['e_haslo']);
                              }
                            ?>


                          <div class="form-outline form-white mb-4">
                            <input type="text" name="miejscowosc" id="form3Example4" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4">Miejscowość</label>
                            <?php
                              if (isset($_SESSION['eMiejscowosc'])) {
                                echo '<div class="error">'.$_SESSION['eMiejscowosc'].'</div>';
                                unset($_SESSION['eMiejscowosc']);
                              }
                            ?>

                          <div class="form-outline form-white mb-4">
                            <input type="text" name="kodPocztowy" id="form3Example4" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4">Kod pocztowy</label>
                            <?php
                              if (isset($_SESSION['eKod'])) {
                                echo '<div class="error">'.$_SESSION['eKod'].'</div>';
                                unset($_SESSION['eKod']);
                              }
                            ?>

                          <div class="form-outline form-white mb-4">
                            <input type="text" name="nrdomu" id="form3Example4" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4">Numer domu/mieszkania</label>

                        
                          <button type="submit" class="btn btn-light btn-block mb-4">Zajerestruj</button>

                          <a href="logowanie.php" style='color: white'><b>Powrót do poprzedniej strony</b></a>
                          

                        </form>
      
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>