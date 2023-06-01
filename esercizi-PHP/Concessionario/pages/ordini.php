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

            $OrderController = require 'controllers/OrderController.php';
            $OrderController.OrderFilter();

            $result = $_SESSION['result'];
        
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