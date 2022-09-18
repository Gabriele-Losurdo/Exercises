<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS Bar Graph</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"><link rel="stylesheet" href="./style.css">

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
      <h3>Istrogramma</h3>

      <form action="" method="POST">

        <label>Centro Commerciale:</label>
        <input type="number" name="com" min="0" max="500" required><br>

        <label>Supermercato:</label>
        <input type="number" name="sup" min="0" max="500" required><br>

        <label>Mercato:</label>
        <input type="number" name="mer" min="0" max="500" required><br>

        <label>Internet:</label>
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

      $ccom_px = ($_POST["com"])."px";
      $super_px = ($_POST["sup"])."px";
      $mer_px = ($_POST["mer"])."px";
      $int_px = ($_POST["int"])."px";
      $not_px = ($_POST["not"])."px";

      echo <<< FINE

        <center><h3>Ecco le preferenze degli intervistati:</h3></center>

        <div class="bar-graph_container" style="margin: 0 auto;top: 30px;">
          <div class="bar-graph_levels">
            <span class="bar-graph_level">200+</span>
            <span class="bar-graph_level">200</span>
            <span class="bar-graph_level">100</span>
            <span class="bar-graph_level">50</span>
          </div>
          <div class="bar-graph_bars">
            <div class="bar-graph_bar pink" style="width:$ccom_px;"><div class="tooltip">$ccom</div></div>
            <div class="bar-graph_bar orange" style="width:$super_px;"><div class="tooltip">$super</div></div>
            <div class="bar-graph_bar green" style="width:$mer_px;"><div class="tooltip">$mer</div></div>
            <div class="bar-graph_bar blue" style="width:$int_px;"><div class="tooltip">$int</div></div>
            <div class="bar-graph_bar yellow" style="width:$not_px;"><div class="tooltip">$not</div></div>
          </div>
          <div class="bar-graph_items">
          <span class="bar-graph_item">Centro</span>
          <span class="bar-graph_item">Super </span>
          <span class="bar-graph_item">Mercat</span>
          <span class="bar-graph_item">Intern</span>
          <span class="bar-graph_item">Nessun</span>
          </div>
        </div>

        <br><br><br><br><center><a href=''>Inserisci altri dati</a></center>

      FINE;
      
    }


    

  }

  ?>

  
</body>
</html>
