<?php
    session_start();

    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)) {
        header('location: index.php');
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" >
    <title>Logowanie</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="stylee.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="login.php" method="post">
    <div class="login-form">
        <div class="form-header">
          <div class="title">Logowanie</div>
         </div> 
         <div class="form-container">
           <div class="form-element">
             <label class="fa fa-user" for="login-username"></label>
             <input type="text" id="login-username" name="login"
        placeholder="Nazwa">
           </div>
           <div class="form-element">
             <label class="fa fa-key" for="login-password"></label>
             <input type="password" id="login-password" name="haslo"
        placeholder="Hasło">
           </div>
           <div class="form-element">
             <button type="submit">Zaloguj</button>
           </div>
           <?php
                if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
            ?>
           <div class="form-element forgot-link">
             <a href="rejestracja.php">Zajerestruj się</a>
           </div>
         </div>
       </div>
       </form>
</body>
</html>