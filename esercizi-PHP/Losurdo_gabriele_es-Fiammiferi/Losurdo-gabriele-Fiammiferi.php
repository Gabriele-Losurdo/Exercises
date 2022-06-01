<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Losurdo-gabriele-fiammiferi</title>
</head>
<body>

    <h1>Gioco dei fiammiferi</h1>

    <?php

    if(!isset($_POST["invio"])){
        index();
    }else{
        $numF = $_POST["Numf"];// numero dei fiammiferi che l'utente ha preso
        $fTot = $_POST["fTot"];// fiammiferi totali
        $U_C = $_POST["uc"];// variabile per scandire i turni
        Gfiammiferi($numF,$U_C,$fTot);
    }

    // funzione iniziale per poter iniziare il gioco
    function index(){

        echo <<< FINE

        <strong>Regole del gioco</strong>: Sul tavolo ci sono 11 fiammiferi.<br>
        Ogni giocatore, a turno, può prendere 1,2 o 3 fiammiferi<br>
        Vince il giocatore che lascia l'ultimo fiammifero sul tavolo
        <br><br>
        Comincio io! e Prendo <strong>2</strong> fiammiferi
        <br><br>
        Ora sul tavolo ci sono 9 fiammiferi
        <br><br>
        FINE;

        for($i=0;$i<9;$i++){
            echo "<img src=\"fiammifero.jpg\">";
        }

        echo <<< FINE

        <form method="POST" action="">
            <strong>Quanti Fiammiferi prendi</strong><input type="number" name="Numf" min="1" max="3">
            <br>
            <input type="hidden" name="uc" value="1">
            <input type="hidden" name="fTot" value="9">
            <input type="submit" name="invio" value="Invia"><br>
        </form>

        FINE;

    }// fine funzione

    // funzione per il gioco dei fiammiferi
    function Gfiammiferi($numF,$U_C=0,$fTot){

        if($U_C==0){// lato utente

            $fTot-=$numF;

            if($fTot==1){
                echo "Ha vinto il computer per aver lasciato l'ultimo fiammifero sul tavolo!";
                echo "<br><a href=\"\">Inizia un'altra partita</a>";
            }else{

                for($i=0;$i<$fTot;$i++){
                    echo "<img src=\"fiammifero.jpg\">";
                }

                echo "<br> Sono rimasti $fTot fiammiferi<br>";
    
                echo <<< FINE
                    <br>
                    <strong>Inserisci il numero di fiammiferi che vuoi prendere!( 1, 2 o 3)</strong>
                    <form method="POST" action="">
                        <input type="number" name="Numf" min="1" max="3">
                        <br>
                        <input type="hidden" name="uc" value="1">
                        <input type="hidden" name="fTot" value="$fTot">
                        <input type="submit" name="invio" value="Invia"><br>
                    </form>
                FINE;

            }
            
        }else{//lato computer
            $fTot-=$numF;
           
            if($fTot==1){

                echo "Il computer ha perso! Hai vinto!";
                echo "<br><a href=\"\">Inizia un'altra partita</a>";

            }else if($fTot>1){
                
                $nf_estratti = mt_rand(1,3);
            
                if(($fTot-=$nf_estratti)<=0){

                    echo "Il computer ha perso per aver preso tutti i fiammiferi sul tavolo ( $nf_estratti )</strong>! Ha vinto l'utente!";
                    echo "<br><a href=\"\">Inizia un'altra partita</a>";

                }else{

                    echo "L'utente ha preso <strong>$numF</strong> fiammiferi<br><br>";
                    echo "Il computer ha preso <strong>$nf_estratti</strong> fiammiferi<br><br>";
                    echo "<br> Sono rimasti $fTot fiammiferi<br>";

                    for($i=0;$i<$fTot;$i++){
                        echo "<img src=\"fiammifero.jpg\">";
                    }
                    echo <<< FINE
        
                        <br><br>
                        <strong>Passa alla prossima fase!</strong>
                        <form method="POST" action="">
                            <br>
                            <input type="hidden" name="uc" value="0">
                            <input type="hidden" name="Numf" value="0">
                            <input type="hidden" name="fTot" value="$fTot">
                            <input type="submit" name="invio" value="Invia"><br>
                        </form>

                    FINE;
                    
        
                }

            }else{

                echo "Ha vinto il computer perchè hai preso troppi fiammiferi!";
                echo "<br><a href=\"\">Inizia un'altra partita</a>";

            }
            
        }

    }// fine funzione

    ?>
</body>
</html>