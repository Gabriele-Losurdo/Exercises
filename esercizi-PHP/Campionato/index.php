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
    session_start(); // apro la sessione

    if(!isset($_POST["Invio"])){
        if(isset($_POST["Modifica"])){ // quando sping il bottone Mod
            modifica();
        }else if(isset($_POST["Change"])){ // quando modifico e salvo le modifiche della squadra
            change();
            ordina();
            index();
        }else{ // viene eseguita solo la prima volta
            $classifica=array();                  // Crea l'array vuoto
            $_SESSION["classifica"] = $classifica;
            index();
        }
    }else{ // viene eseguito ogni volta che viene aggiunta una squdra
        $classifica = $_SESSION["classifica"]; // recupera l'array salvato
        $classifica[] = array( // aggiungo nell'array classifica un array associativo con i varie chiavi e valori inviati nel form
            "Name" => $_POST["Name"],
            "Vittorie" => $_POST["Vittorie"],
            "Sconfitte" => $_POST["Sconfitte"],
            "Pareggi" => $_POST["Pareggi"],
            "Punti" => $_POST["Punti"]
        );
        $_SESSION["classifica"] = $classifica; // aggiorno la variabile di sessione
        ordina(); // ordino la classifica
        index(); // mostro il form e la tabella aggiornata
    }

    function index(){
        $classifica = $_SESSION["classifica"]; // recupera l'array salvato
       
        echo <<< END
        
        <form method="POST">
            <div class="dati" >
                
                <div class="mb-3">
                    <label  class="form-label">Nome squadra: </label>
                    <input type="text" class="form-control" name="Name" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Vittorie: </label>
                    <input type="number" class="form-control" name="Vittorie" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Sconfitte: </label>
                    <input type="number" class="form-control" name="Sconfitte" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Pareggi: </label>
                    <input type="number" class="form-control" name="Pareggi" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Punti classifica: </label>
                    <input type="number" class="form-control" name="Punti" required>
                </div>
        
          </div>
        
          <button type="submit" class="btn btn-primary" name="Invio">Invia</button> 
          <button type="reset" class="btn btn-primary" name="Cancella">Elimina</button>
        
        </form>
        
        </div>
        <table>
          <thead>
            <tr>
              <th>Squadra</th>
              <th>Vittore</th>
              <th>Pareggi</th>
              <th>Sconfitte</th>
              <th>Punti</th>
              <th>Modifica</th>
              </tr>
          </thead>
          <tbody>
            <tr>
        END;

        for($i=0;$i<count($classifica);$i++){
            foreach($classifica[$i] as $key=>$value){
                echo <<< END
                    <td>$value</td>
                END;
            }
                
                echo <<< END
                    <td><form method="POST"><button type="submit" class="btn btn-success" name="Modifica">Mod</button>
                    <input type="number" value="$i" name="indice" style="display:none;"></form></td></tr>
                END;
        }
        echo <<< END
          </tbody>
        </table>
        END;
    }

    function modifica(){
        $indice = $_POST['indice'];
        $classifica = $_SESSION["classifica"]; // recupera l'array salvato
        $squadra = $classifica[$indice];
        $nome = $squadra["Name"];
        $vittorie = $squadra["Vittorie"];
        $scofitte = $squadra["Sconfitte"];
        $pareggi = $squadra["Pareggi"];
        $punti = $squadra["Punti"];
        echo <<< END
        <form method="POST">
            <div class="dati" >
                
                <div class="mb-3">
                    <label  class="form-label">Nome squadra: </label>
                    <input type="text" class="form-control" placeholder="$nome" name="Name" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Vittorie: </label>
                    <input type="number" class="form-control" placeholder="$vittorie" name="Vittorie" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Sconfitte: </label>
                    <input type="number" class="form-control" placeholder="$scofitte" name="Sconfitte" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Pareggi: </label>
                    <input type="number" class="form-control" placeholder="$pareggi" name="Pareggi" required>
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Punti classifica: </label>
                    <input type="number" class="form-control" placeholder="$punti" name="Punti" required>
                </div>

                <input type="number" value="$indice" name="indice" style="display:none;">
        
        </div>
        
        <button type="submit" class="btn btn-primary" name="Change">Salva le modifiche</button> 
        <button type="reset" class="btn btn-primary" name="Cancella">Elimina</button>
        
        </form>
        END;
    }

    function change(){ // modifica la squadra scelta dall'utente con i vari valori inseriti nel form
        $indice = $_POST['indice'];
        $classifica = $_SESSION["classifica"]; // recupera l'array salvato
        $classifica[$indice] = array(
            "Name" => $_POST["Name"],
            "Vittorie" => $_POST["Vittorie"],
            "Sconfitte" => $_POST["Sconfitte"],
            "Pareggi" => $_POST["Pareggi"],
            "Punti" => $_POST["Punti"]
        );
        $_SESSION["classifica"] = $classifica; // aggiorno la variabile di sessione con la classifica aggiornata
    }

    function ordina(){ // funzione per ordinare le squadre inserite tramite il Bubble sort
        $classifica = $_SESSION["classifica"]; // recupera l'array salvato
        for($i=0;$i<count($classifica);$i++){
            $squadra1 = $classifica[$i];
            for($j=$i+1;$j<count($classifica);$j++){
                $squadra2 = $classifica[$j];
                if($squadra2["Punti"] > $squadra1["Punti"]){
                    $classifica[$j] = $squadra1;
                    $classifica[$i] = $squadra2; 
                }
            }
        }
        $_SESSION["classifica"] = $classifica; // aggiorno la variabile di sessione con la classifica ordinata
    }
?>


</body>

</html>