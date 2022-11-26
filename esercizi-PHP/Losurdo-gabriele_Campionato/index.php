<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color:#105469">
<div class="main">
<font face="Comic sans MS" class="color" size="10">CLASSIFICA CAMPIONATO</font>
<?php
    session_start();
    if(!isset($_POST["Invio"])){
        $classifica=array();                  // Crea l'array vuoto
        $_SESSION["classifica"] = $classifica;
        if(isset($_POST["Modifica"])){
            modifica();
        }else{
            index();
        }
    }else{
        $classifica[] = $_SESSION["classifica"]; // recupera l'array salvato
        $classifica[] = array(
            "Name" => $_POST["Name"],
            "Vittorie" => $_POST["Vittorie"],
            "Sconfitte" => $_POST["Sconfitte"],
            "Pareggi" => $_POST["Pareggi"],
            "Punti" => $_POST["Punti"]
        );
        $_SESSION["classifica"] = $classifica;
        index();
    }

    function index(){
        $classifica[] = $_SESSION["classifica"]; // recupera l'array salvato
        echo <<< END
        
        <form action="" method="POST">
            <div class="dati" >
                
                <div class="mb-3">
                    <label  class="form-label">Nome squadra: </label>
                    <input type="text" class="form-control" name="Name">
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Vittorie: </label>
                    <input type="number" class="form-control" name="Vittorie">
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Sconfitte: </label>
                    <input type="number" class="form-control" name="Sconfitte">
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Pareggi: </label>
                    <input type="number" class="form-control" name="Pareggi">
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Punti classifica: </label>
                    <input type="number" class="form-control" name="Punti">
                </div>
        
          </div>
        
          <button type="submit" class="btn btn-primary" name="Invio">Invia</button> 
          <button type="reset" class="btn btn-primary" name="Cancella">Elimina</button>
        
        </form>
        
        </div>
        <table>
          <thead>
            <tr>
              <th>Squadra
              <th>Vittorie
              <th>Pareggi
              <th>Sconfitte
              <th>Punti
              <th>Modifica
          </thead>
          <tbody>
        END;
        for($i=0;$i<count($classifica);$i++){
            echo "<tr>";
            foreach($classifica[$i] as $key=>$value){
        
                echo "<td>$value";
        
            }
                
            echo ' <td><form action="" method="POST"><button type="submit" class="btn btn-success" name="Modifica">Invia</button>'.
                     ' <input type="number" name="indice" value="$i" style="display:none;"></form>';
        }
        echo <<< END
          </tbody>
        </table>
        END;
    }

    function modifica(){
        
    }
?>


</body>

</html>