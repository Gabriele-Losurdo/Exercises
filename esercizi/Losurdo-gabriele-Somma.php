<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
 *main 
 */

if(!isset($_POST["invio"])){
    form();
}else{
    somma();
}

/*
 * Visualizza form
 */

function form($stringa = ""){
    echo <<< FINE
    <h1>Inserisci i due numeri che vuoi sommare!</h1>
        <form method="POST" action="Losurdo-gabriele-Somma.php">
            Primo numero:<input type="number" name="numero1"><br>
            Secondo numero:<input type="number" name="numero2"><br>
            <b>$stringa</b>
            <input type="submit" name="invio" value"Invia"><input type="reset">
        </form>
    FINE;
}

/*
 * Visualizza somma
 */
function somma(){
    $numero_1 = $_POST["numero1"];
    $numero_2 = $_POST["numero2"];
    if($numero_1==null || $numero_2==null){
        form("Non valido! Reinserire i parametri.");
    }else{
        $somma = $numero_1 + $numero_2;
        echo "<b>La somma di $numero_1 e $numero_2 è di: $somma!</b>";
    }
}

?>
</body>
</html>