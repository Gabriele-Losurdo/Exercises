<?php        
    if(isset($_POST['Ordina'])){
        include('pages/consegna.php');
    }else if(!isset($_GET["men"])){
        if(isset($_POST['Aggiorna'])){
            $menu = $_SESSION["menu"]; // recupera l'array salvato
            $menu[] = array( // aggiungo nell'array classifica un array associativo con i varie chiavi e valori inviati nel form
                "Prodotto" => $_POST["prodotto"],
                "Prezzo" => $_POST["prezzo"]
            );
            $_SESSION["menu"] = $menu; // aggiorno la variabile di sessione
            include('pages/caricamento.php');
        }else if(!isset($_GET["add"])){ // viene eseguita solo la prima volta
                $menu=array();                  // Crea l'array vuoto
                $_SESSION["menu"] = $menu;
                include('pages/caricamento.php');
        }else{
            include('pages/caricamento.php');
        } 
    }else{
        include('pages/ordina.php');
    }
?>