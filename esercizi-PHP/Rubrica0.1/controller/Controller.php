<?php        
    if(isset($_POST['Contatto'])){
        include('pages/consegna.php');
    }else if(!isset($_GET["Rubrica"])){
        if(isset($_POST['Aggiorna'])){
            $Rubrica = $_SESSION["Rubrica"]; // recupera l'array salvato
            $Rubrica[] = array( // aggiungo nell'array classifica un array associativo con i varie chiavi e valori inviati nel form
                "Nome" => $_POST["Nome"],
                "Cognome" => $_POST["Cognome"],
                "Indirizzo" => $_POST["Indirizzo"],
                "Città" => $_POST["Città"],
                "Provincia" => $_POST["Provincia"],
                "Cellulare" => $_POST["Cellulare"],
                "Email" => $_POST["Email"]
            );
            $_SESSION["Rubrica"] = $Rubrica; // aggiorno la variabile di sessione
            include('pages/Contatto.php');
        }else if(!isset($_GET["add"])){ // viene eseguita solo la prima volta
                $Rubrica=array();                  // Crea l'array vuoto
                $_SESSION["Rubrica"] = $Rubrica;
                include('pages/Contatto.php');
        }else{
            include('pages/Contatto.php');
        } 
    }else{
        include('home.php');
    }
?>