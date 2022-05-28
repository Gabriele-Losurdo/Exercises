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
    form_signin();
}else{
    sign_in();
}

/*
 * Visualizza form
 */

function form_signin($stringa = ""){
    echo <<< FINE
    <h1>Registrati a questo sito!</h1>
        <form method="POST" action="Losurdo-gabriele-Form-Registrazione.php">
            <b>Nome*</b>: <input type="text" name="nome" required><br>
            <b>Cognome*</b>: <input type="text" name="cognome" required><br>
            <b>Data di nascita</b>: <input type="date" name="datanascita"><br>
            <b>Citta</b>: <input type="text" name="citta"><br>
            <b>Indirizzo</b>: <input type="text" name="ind"><br>
            <b>Cap</b>: <input type="number" name="cap"><br>
            <b>E-mail*</b>: <input type="email" name="e-mail" required><br>
            <b>Password*</b>: <input type="password" name="pass" required><br>
            <b>Conferma password*</b>: <input type="password" name="conf_pass" required><br>
            <b>$stringa</b><br>
            <input type="submit" name="invio" value="Invia i dati!"> <input type="reset" value="Reimposta i dati!">
        </form>
    FINE;
}

/*
 * Visualizza somma
 */
function sign_in(){
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $datan = $_POST["datanascita"];
    $citta = $_POST["citta"];
    $ind = $_POST["ind"];
    $cap = $_POST["cap"];
    $email = $_POST["e-mail"];
    $pass = $_POST["pass"];
    $c_pass = $_POST["conf_pass"];
        if ($pass===$c_pass){
            echo <<<FINE
            Registrazione effettuata con successo con i seguenti dati:
            <b>Nome</b>: $nome<br>
            <b>Cognome</b>: $cognome<br>
            <b>Data di nascita</b>: $datan<br>
            <b>Citta</b>: $citta<br>
            <b>Indirizzo</b>: $ind<br>
            <b>Cap</b>: $cap<br>
            <b>E-mail</b>: $email<br>
            <b>Password</b>: $pass<br>
            FINE;
        }else{
            form_signin("Registrazione non valida! Le password non coincidono!");
        }

}
?>
</body>
</html>