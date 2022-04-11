<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calcolatrice</h2>
    <?php

    /*
     * Main
     */
    if(!isset($_POST["invio"])){
        Calcolatrice();
    }else if($_POST["operazione"]=="Somma"){
        somma();
    }else if($_POST["operazione"]=="Differenza"){
        differenza();
    }else if($_POST["operazione"]=="Quoziente"){
        quoziente();
    }else if($_POST["operazione"]=="Moltiplicazione"){
        prodotto();
    }
    /*
     * Fine Main
     */


    /*
     * Pagina di inserimento dati
     */
    function Calcolatrice(){
        echo <<<FINE

        <form action="Losurdo-gabriele-Calcolatrice.php" method="post">

        <b>Operazione da effettuare</b><br>

        <input type="radio" name="operazione" value="Somma" required>+ Somma<br>
        <input type="radio" name="operazione" value="Differenza" required>- Differenza<br>
        <input type="radio" name="operazione" value="Quoziente" required>: Quoziente<br>
        <input type="radio" name="operazione" value="Moltiplicazione" required>* Prodotto<br>

        <b>Operandi</b><br>

        Primo operando: <input type="number" name="p_op" required><br>
        Secondo operando: <input type="number" name="s_op" required><br>

        <input type="submit" name="invio" value="Invia">
        <input type="reset" name="reimposta" value="Resetta i valori">

        </form>
        FINE;
    }
    /*
     * Fine pagina di inserimento dati
     */


    
    /*
     * Funzione somma
     */
    function somma(){
        $p_op=$_POST["p_op"];
        $s_op=$_POST["s_op"];

        $somma = $p_op + $s_op;
        echo "La somma tra <b>$p_op</b> e <b>$s_op</b> è: <b>$somma</b> .";
    }
    /*
     * Fine della funzione somma
     */

     
    /*
     * Funzione differenza
     */
    function differenza(){ 
        $p_op=$_POST["p_op"];
        $s_op=$_POST["s_op"];

        $diff = $p_op - $s_op;
        echo "La differenza tra <b>$p_op</b> e <b>$s_op</b> è: <b>$diff</b> .";
    }
    /*
     * Fine della funzione differenza
     */

    
    /*
     * Funzione prodotto
     */
    function prodotto(){
        $p_op=$_POST["p_op"];
        $s_op=$_POST["s_op"];

        $prod = $p_op * $s_op;
        echo "Il prodotto tra <b>$p_op</b> e <b>$s_op</b> è: <b>$prod</b> .";
    }
    /*
     * Fine della funzione prodotto
     */


    /*
     * Funzione quoziente
     */
    function quoziente(){
        $p_op=$_POST["p_op"];
        $s_op=$_POST["s_op"];

        $quo = $p_op / $s_op;
        echo "Il quoziente tra <b>$p_op</b> e <b>$s_op</b> è: <b>$quo</b> .";
    }
    /*
     * Fine della funzione quoziente
     */

    ?>
</body>
</html>