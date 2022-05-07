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
    Scrivere una pagina che effettua l'inserimento del nome di un utente ("Come ti chiami?") 
    e che scriva “buongiorno” quando l’orario attuale è anteriore o uguale alle 12,
    “buon pomeriggio” quando è posteriore alle 12 ma anteriore alle 18 e “buonasera” altrimenti.
    Aggiungere l’indicazione di data e ora attuali (ad esempio “Buongiorno Giovanni, oggi è il 20 Aprile 2009 e sono le ore ..).
    Inoltre cambiare il colore di sfondo della pagina in base al giorno della settimana.
    */

    if(!isset($_POST["invio"])){
        index();
    }else{
        hello();
    }

    function index(){
        echo <<< FINE

        <h2> Come ti chiami? </h2>

        <form action="" method="POST">

            <label for="name">Nome: </label>
            <input type="text" id="name" name="name" required><br>

            <input type="Submit" name="invio" value="Invia">

        </form>

        FINE;
    }
    /*
    echo date("H")."<br>";
    echo date("l jS \of F Y H:i:s a");
    */

    function hello(){

        $nome=$_POST["name"];
        $hour=(int)date("H");

        switch(date("l")){
            case "Monday":
                echo "<style> body {background-color:yellow;} </style>";
                break;    
            case "Tuesday":
                echo "<style> body {background-color:purple;} </style>";
                break;
            case "Wednesday":
                echo "<style> body {background-color:orange;} </style>";
                break;
            case "Thursday":
                echo "<style> body {background-color:grey;} </style>"; 
                break;
            case "Friday":
                echo "<style> body {background-color:blue;} </style>";    
                break;
            case "Saturday":
                echo "<style> body {background-color:green;} </style>";    
                break;    
            case "Sunday":
                echo "<style> body {background-color:red;} </style>";    
                break;        
        }

        $mesi = array (
            "Jan" => "Gennaio",
            "Feb" => "Febbraio",
            "Mar" => "Marzo",
            "Apr" => "Aprile",
            "May" => "Maggio",
            "Jun" => "Giugno",
            "Jul" => "Luglio",
            "August" => "Agosto",
            "Sep" => "Settembre",
            "Oct" => "Ottobre",
            "Nov" => "Novembre",
            "Dec" => "Dicembre",
        );

        if($hour < 12){
            $saluto="Buongiorno $nome, ";
        } else if ( $hour < 18 ){
            $saluto="Buon pomeriggio $nome, ";
        }else{
            $saluto="Buonasera $nome, ";
        }

        echo $saluto . "oggi è il " . date("j ") . $mesi[date("M")] . date(" Y") . " e sono le ore " . date("H:i:s");

    }

    ?>
</body>
</html>