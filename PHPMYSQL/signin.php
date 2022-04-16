<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<h1>Registrati a questo sito!</h1>
        <form method="POST" action="main.php">
            <b>Nome*</b>: <input type="text" name="nome" required><br>
            <b>Cognome*</b>: <input type="text" name="cognome" required><br>
            <b>E-mail*</b>: <input type="email" name="e-mail" required><br>
            <!--
            <b>Data di nascita</b>: <input type="date" name="datanascita"><br>
            <b>Citta</b>: <input type="text" name="citta"><br>
            <b>Indirizzo</b>: <input type="text" name="ind"><br>
            <b>Cap</b>: <input type="number" name="cap"><br>
            <b>Password*</b>: <input type="password" name="pass" required><br>
            <b>Conferma password*</b>: <input type="password" name="conf_pass" required><br>
            <b>$stringa</b><br>
            -->
            <input type="submit" name="invio" value="Invia i dati!"> <input type="reset" value="Reimposta i dati!">
        </form>
</body>
</html>