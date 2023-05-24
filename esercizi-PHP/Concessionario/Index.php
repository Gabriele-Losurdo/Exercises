<?php 
    $connection = require 'database/connection.php';
    $connection.init_connection(); // inizializzo la connessione
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css"> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="resources/images/cinema.png" alt="" width="60" height="60">
        </a>
            <a class="navbar-brand" href="Index.php"><h1><span class="blue">&lt;</span>Concessionario<span class="blue">&gt;</span> <span class="yellow">Film</span></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="form-control" aria-controls="navbarNav" class="form-control" aria-expanded="false" class="form-control" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <div>
            <form method="POST" >
                <h1>Trova Ordine</h1>
                <br>
                <div class="form-group">
                    <input type="text" name="nome" class="form-control" aria-label="Search" placeholder="Inserisci Nome"><br><br>
                    <input type="date" name="data_inizio" class="form-control" required><br><br>
                    <input type="date" name="data_fine" class="form-control" required><br><br>
                    <input type="text" name="cognome" class="form-control" aria-label="Search" placeholder="Inserisci Cognome"><br><br>

                    <br><br>
                    <button class="btn btn-success" type="submit" name="submit">Cerca</button>
                </div>
            </form>
        </div>
        <br>
    <?php 

        $conn = $_SESSION['conn']; 
    
        $query="SELECT orders.orderDate,customers.contactFirstName,customers.contactLastName 
        FROM orders JOIN customers 
        on orders.customerNumber=customers.customerNumber ";
        if(isset($_POST['submit'])){  
            $data_inizio=$_POST['data_inizio'];
            $data_fine=$_POST['data_fine'];
            $nome=$_POST['nome'];
            $cognome=$_POST['cognome'];
            $query = $query . 
            " WHERE customers.contactFirstName LIKE '%$nome%' 
            AND customers.contactLastName LIKE '%$cognome%' 
            AND orders.orderDate > '$data_inizio' AND orders.orderDate < '$data_fine'";
            
           }
        $query=$query . " ORDER BY orders.orderDate,customers.contactLastName";
        $result=$conn->query($query); 
    
    ?>
 
        <table class="table table-success table-striped-columns">
            <tr> 
                <th>Numero Ordine</th>
                <th>Nome Cliente</th>
                <th>Cognome Cliente</th>
            </tr>
        <?php
        
        while ($records = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $records['orderDate']?></td>
                <td><?php echo $records['contactFirstName']?></td>
                <td><?php echo $records['contactLastName']?></td>
            </tr>    
            <?php
        }
    ?>
    </table>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
<?php
$connection.destroy_connection(); // chiudo la connessione
?>