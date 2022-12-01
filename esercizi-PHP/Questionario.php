<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionario</title>
</head>
<body>
    <?php

use Symfony\Component\Finder\Finder;

    if(!isset($_POST["Invia"])){
        questionario();
    }else{
        punteggioQuestionario();
    }

    function questionario(){

        echo <<< FINE

        <form action="Losurdo-gabriele-Questionario.php" method="POST">

            <h3>Inserisci i tuoi dati personali!</h3>
                Nome:*<input type="text" name="nome" required><br>
                Cognome:*<input type="text" name="cognome" required><br>
                Classe:*<input type="text" name="classe" required><br>

            <h3>1) Linguaggio più utilizzato per lo sviluppo di giochi?</h3>
                <input type="radio" name="language" value="C#">C#<br>
                <input type="radio" name="language" value="java">Java<br>
                <input type="radio" name="language" value="html">Html<br>

            <h3>2) Qual'è la squadra di calcio che ha vinto più champions?</h3>
                <input type="radio" name="ChampionSquad" value="RealMadrid">Real Madrid<br>
                <input type="radio" name="ChampionSquad" value="Milan">Milan<br>
                <input type="radio" name="ChampionSquad" value="Liverpool">Liverpool<br>

            <h3>3) Chi ha il soprannome del 'Il predestinato' nella Formula 1?</h3>
                <input type="radio" name="predestinato" value="MaxV">Max Verstappen<br>
                <input type="radio" name="predestinato" value="CharL">Charles Leclerc<br>
                <input type="radio" name="predestinato" value="LandN">Lando Norris<br>

            <br>

            <input type="submit" name="Invia" value="Invia le risposte">
            <input type="reset" name="reset" value="Cancella le tue risposte">

        
        </form>

        FINE;

    }

    function punteggioQuestionario(){

        $punteggio = 0;

        if(isset($_POST["language"])){
            if($_POST["language"]=="C#"){
                $punteggio+=3;
            }else{
                $punteggio--;
            }
        }

        if(isset($_POST["ChampionSquad"])){
            if($_POST["ChampionSquad"]=="RealMadrid"){
                $punteggio+=3;
            }else{
                $punteggio--;
            }
        }

        if(isset($_POST["predestinato"])){
            if($_POST["predestinato"]=="CharL"){
                $punteggio+=3;
            }else{
                $punteggio--;
            }
        }

        echo <<< FINE

        <h1>Il massimo punteggio è 9!</h1>

        <p>Hai totaliazzato un punteggio pari a $punteggio/9 !</p>

        FINE;
    }

    ?>
    
</body>
</html>