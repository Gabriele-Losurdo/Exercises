<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Losurdo Gabriele Lotto</title>
</head>
<body>
<?php

    if(!isset($_POST["invio"])){
        index();
    }else{
        lotto();
    }

    // funzione per l'inserimento dei numeri che vuole giocare l'utente
    function index(){

        echo <<< FINE

        <h2>Gioco del Lotto - Una sola ruota di estrazione</h2>

        <h3>Inserisci i 5 numeri che vuoi giocare</h3>

        <form action="" method="POST">

            1° numero : <input type="number" min="0" max="90" name="num_giocati[]"><br><br>
            2° numero : <input type="number" min="0" max="90" name="num_giocati[]"><br><br>
            3° numero : <input type="number" min="0" max="90" name="num_giocati[]"><br><br>
            4° numero : <input type="number" min="0" max="90" name="num_giocati[]"><br><br>
            5° numero : <input type="number" min="0" max="90" name="num_giocati[]">
            <br><br>
            <input type="submit" name="invio" value="Invia i numeri che vuoi giocare!">

        </form>

        FINE;

    }

    function cambia_doppione($numeri_vincenti,$k){

        $bool = 0;
        $i = 0;
        $conta_doppioni = 0;
        // cambio del numero duplicato
        // questo blocco viene eseguito fino a quando il numero non sarà diverso
        // potrebbe essere eseguito una sola volta o più volte
        while($bool==0){
            for($j=0;$j<count($numeri_vincenti);$j++){
                if($numeri_vincenti[$k] == $numeri_vincenti[$j]){
                    $numeri_vincenti[$k] = mt_rand(1, 90);
                }
            }
            for($j=0;$j<count($numeri_vincenti);$j++){
                if($numeri_vincenti[$i] == $numeri_vincenti[$j]){
                    $conta_doppioni++;
                }
            }
            if($conta_doppioni==1){
                $bool=1;
            }
            $i++;
        }

        return $numeri_vincenti;
    }

    function numeri_vincenti($numeri_giocati){
        
        $numeri_vincenti = array();

        $numeri_vinti = 0;

        echo "Numeri vincenti : ";
        
        // blocco di istruzioni che viene utilizzato sia per settare casualmente i numeri vincenti 
        // sia per controllare che tra i numeri vincenti non ci siano duplicati 
        for($i=0;$i<10;$i++){

            $conta_doppioni = 0;

            $numeri_vincenti[$i] = mt_rand(1, 90);

            for($j=0;$j<count($numeri_vincenti);$j++){
                if($numeri_vincenti[$i] == $numeri_vincenti[$j]){
                    $conta_doppioni++;
                }
            }

            if($conta_doppioni==2){
                $numeri_vincenti=cambia_doppione($numeri_vincenti,$i);
            }

            echo $numeri_vincenti[$i] . " , ";

        }
        
        echo "<br><br>Numeri giocati : ";

        // controlla se i numeri giocati sono uguali a quelli settati casualmente dalla funzione
        for($i=0;$i<5;$i++){
            $numeri_vinti_before = $numeri_vinti;
            for($j=0;$j<10;$j++){
                if($numeri_giocati[$i] == $numeri_vincenti[$j]){
                    $numeri_vinti++;
                    break;
                }
            }
            //dando poi in output in grassetto quelli indovinati
            if($numeri_vinti == $numeri_vinti_before+1){
                echo "<strong> $numeri_giocati[$i] </strong> , ";
            }else{
                echo " $numeri_giocati[$i] , ";
            }
            //se si raggiunge il numero massimo il for finisce il suo loop
            if($numeri_vinti == 5){
                break;
            }
        }

        // custom output in base ai numeri indovinati
        if($numeri_vinti == 0){
            echo " | Che peccato! Non hai indovinato neanche un numero vincente!!!!";
        }else if($numeri_vinti == 5){
            echo " | Hai vinto congratulazioni!!";
        }else{
            echo " | Hai indovinato $numeri_vinti numeri sui 5 che dovevi indovinare!";
        }

    }

    // funzione per fare le 10 estrazioni
    function lotto(){

        $numeri_giocati=$_POST["num_giocati"];
        for($i=0;$i<10;$i++){
            echo "<h2>Estrazione n. " . ($i+1) . " :</h2>";
            numeri_vincenti($numeri_giocati);
        }
    }

?>
</body>
</html>