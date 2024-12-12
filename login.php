<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
    header('location: logowanie.php');
    exit();
}

require_once "connect.php";

//@ jest to operator kontroli bledow nie wyswetli nam bledu/ostrzezenia za strony php
$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0)
{
    echo "Error: ".$polaczenie->connect_errno;
} else 
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    
    //%s  oznaczenie miejsca gdzie bedzie przebywac zmienna typu string, sprintf wstawi pierwsze miejsce co jest po przecinku w pierwszym %s
    //mysqli_real_escape_string zabezpiecza nasza baze przed proba "wstrzykiwania" sql'a
    if ($rezultat = @$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE nazwa='%s'",
        mysqli_real_escape_string($polaczenie, $login)))) {
        $ile_userow = $rezultat->num_rows;
        //sprawdza czy logowanie sie udalo/czy jest przynajmniej 1 pasujacy rezultat z bazy
        if($ile_userow>0) {
            $wiersz = $rezultat->fetch_assoc();
            if (password_verify($haslo,$wiersz['haslo'])) {

                $_SESSION['zalogowany']=true;

                //przynosi wszystkie wartosci 
                $_SESSION['id']=$wiersz['uzytkownicy_id'];
                $nazwa = $wiersz['nazwa'];
                $haslo = $wiersz['haslo'];
                unset($_SESSION['blad']);

                $rezultat->free_result();

                //przekierowanie
                header('location: index.php');
                } else {
                $_SESSION['blad'] = '<span style="color:red"><b>Nieprawidłowy login lub hasło!</b></span>';
                header('location: logowanie.php'); }

        } else {
            $_SESSION['blad'] = '<span style="color:red"><b>Nieprawidłowy login lub hasło!</b></span>';
            header('location: logowanie.php');
        }
    }

    $polaczenie->close();
}








?>