<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>