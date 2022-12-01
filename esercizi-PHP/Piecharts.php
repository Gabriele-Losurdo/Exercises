<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>            
            <script type="text/javascript">                               
                function grafico_torta(com, sup, mer, int, not){
                    google.charts.load("current", {packages:["corechart"]});                    
                    google.charts.setOnLoadCallback(drawChart);                    
                    function drawChart() {                       
                        var data = google.visualization.arrayToDataTable([                            
                        ['Dove fare compere', 'Preferenze'],                            
                        ['Centro commerciale', com],                            
                        ['Supermercato', sup],                            
                        ['Mercato',  mer],                            
                        ['Internet', int],                           
                        ['Nessuna preferenza in particolare', not]                          
                    ]);                        
                    var options = {                        
                        title: 'Preferenze sui negozi',                        
                        is3D: true,                        
                    };                        
                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));                        
                    chart.draw(data, options);                    
                    }
                }        
            </script>
            
    </head>        
    <body>

<?php

    if(!isset($_POST["invio"])){
    index();
    }else{
    grafico();
    }

    function index(){

        echo <<< FINE
        
        <center>
            <h3>Grafico a torta</h3>

            <form action="" method="POST">

                <label>Centro Commerciale:</label>
                <input type="number" name="com" min="0" max="500" required><br>

                <label>Supermercato:</label>
                <input type="number" name="sup" min="0" max="500" required><br>

                <label>Mercato:</label>
                <input type="number" name="mer" min="0" max="500" required><br>

                <label>Inteet:</label>
                <input type="number" name="int" min="0" max="500" required><br>

                <label>Nessun posto in particolare:</label>
                <input type="number" name="not" min="0" max="500" required><br>

                <input type="submit" name="invio" value="Invia">
                <input type="reset" name="reset" value="reset">
            </form>
        </center>

        FINE;

    }

    function grafico(){

        $ccom = $_POST["com"];
        $super = $_POST["sup"];
        $mer = $_POST["mer"];
        $int = $_POST["int"];
        $not = $_POST["not"];
       
        $somma = $ccom + $super + $mer + $int + $not;
   
        if($somma > 500){
         
          echo "<h3>Impossibile visualizzare il grafico.</h3>";
          echo "<a href=''>Inserisci altri dati</a>";
   
        }else{
            // invio dei parametri alla funzione grafico_torta
            echo "

                <script type=\"text/javascript\">grafico_torta($ccom, $super, $mer, $int, $not);</script> 
                <div id=\"piechart_3d\" style=\"width: 900px; height: 500px; margin: 0 auto;\"></div>

            ";

           
        }
   
    }
?>
    


</body>
</html>