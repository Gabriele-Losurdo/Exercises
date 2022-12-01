<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
</head>
<body>
<h2>Tavola Pitagorica</h2>
<?php


    if(!isset($_POST["invio"])){
        form("");
    }else{
        $inizio=$_POST["inizio"];
        $fine=$_POST["fine"];
        if($inizio>$fine){
            form("Il primo numero deve essere minore del secondo!");
        }else{
            tavola_pit($inizio,$fine);
        }
    }

    function form($stringa = ""){
        echo <<<FINE

        <form action="Losurdo-gabriele-Pitagora.php" method="post">

        <b>Operazione da effettuare</b><br>

        Primo numero: <input type="number" name="inizio" min="1" equired><br>
        Secondo numero: <input type="number" name="fine" min="1" required><br>
        
        <input type="submit" name="invio" value="Invia">
        <input type="reset" name="reimposta" value="Resetta i valori"><br>
        <b>$stringa</b>
        </form>
        FINE;
    }

    function tavola_pit($inizio,$fine){
        
        echo "<table><tr><td></td>";
        for($k=$inizio;$k<=$fine;$k++){
            echo "<td> $k </td>";
        }
        echo "</tr>";
        for($i=$inizio;$i<=$fine;$i++){
            echo "<tr><td> $i </td>";
            for($j=$inizio;$j<=$fine;$j++){
                
                $prodotto = $i *$j;
                echo "<td>$prodotto</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href=\"Losurdo-gabriele-Pitagora.php\">Nuova Tavola</a>";
    }
    
?>
</body>
</html>