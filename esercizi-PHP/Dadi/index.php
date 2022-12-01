<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Losurdo-gabriele-Dadi</title>
</head>
<body>
            
    <h1>Lancio dei dadi</h1><br>
    <?php

        if(!isset($_POST["invio"])){
            index();
        }else{
            ldadi();
        }

        // index - con questa funzione chiedo all'utente quanti dadi lanciare
        function index(){

            echo <<< FINE
            <form action="" method="POST">
            <b>Quanti dadi vuoi lanciare?</b><br>
            <input type="number" name="ndadi">
            <input type="submit" name="invio" value="Invia!">
            </form>

            FINE;

        }
        // fine index 

        // ladadi - funzione per il lancio random dei dadi e calcolo del punteggio
        function ldadi(){

            $ndadi = (int)$_POST["ndadi"]; // questa variabile conterrà il numero di dadi che l'utente vuole lanciare
            $sommaP=0; // variabile che conterrà la somma totale dei punti
            $nc=0;
            // con questo ciclo viene 'lanciato' un dado, verrà aggiunto il valore del dado alla variabile sommaP (somma totale dei punti)
            // e infine sarà data in output l'immagine del dado lanciato
            for($i=0;$i<$ndadi;$i++){
                $nc=mt_rand(1,6);
                $sommaP+=$nc;
                echo "<img src=\"dadi-200px/dado_".$nc.".png\">";
                
            }
            // output dei punti effettuati con il lancio dei dadi
            echo "<br>Hai effettuato ".$sommaP." punti con ".$ndadi." dadi!";
        }
        // fine ldadi

    ?>
</body>
</html>