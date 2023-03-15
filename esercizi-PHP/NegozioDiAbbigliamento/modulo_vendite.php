<?php

$servername="localhost";
$username = "root";
$dbname="negozioabb";
$password = "root";

global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM dipendenti;";

$dipendenti = $conn->query($sql);

$sql = "SELECT * FROM articoli;";

$articoli = $conn->query($sql);

if(isset($_POST['submit'])){

    $data = date('Y-m-d');
    $vendita = $_POST['vendita'];
    $values = "'". $vendita['quantita']."','".$vendita['prezzo']."','".$data."','".$vendita['id_dipendente']."','".$vendita['codice_articolo']."'";
    $sql = "INSERT INTO vendite(quantita,prezzo,data_vendita,id_dipendente,codice_articolo) VALUES ($values)";
    $articolo_venduto = $conn->query($sql) 
        or die('Errore hai sbagliato a inserire i dati');

    $articolo_venduto = ($conn->query("SELECT id_vendita  FROM vendite ORDER BY id_vendita DESC LIMIT 1;"))->fetch_assoc(); // recuperare l'ultimo record inserito
    
}

$conn->close();

?>

<div class="vendita">
    <h3>Vendita Articolo</h3>
    <?php if(isset($_POST['submit'])){
        ?>
        <div class="alert alert-success" role="alert">
            Vendita avvenuta con successo! <a href="index.php?dettagli=true&id_vendita=<?php echo $articolo_venduto['id_vendita'] ?>">Dettagli della vendita</a>
        </div>
        <?php
    }
    ?>
    <form method="POST">

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Articolo</label>
            <select name="vendita[codice_articolo]" class="form-select" id="inputGroupSelect01" required>
                <option selected>Choose</option>
                <?php while($records = $articoli->fetch_assoc()){ ?>
                
                    <option value="<?php echo $records['codice_articolo'] ?>"><?php echo $records['codice_articolo'] ?></option>

                <?php } ?>
            </select>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Quantità</span>
            <input type="int" class="form-control" placeholder="Quantita" aria-label="Quantita" name="vendita[quantita]" aria-describedby="basic-addon1" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Prezzo</span>
            <input type="decimal" class="form-control" placeholder="Prezzo" aria-label="Prezzo" name="vendita[prezzo]" aria-describedby="basic-addon1" required>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Dipendente</label>
            <select name="vendita[id_dipendente]" class="form-select" id="inputGroupSelect01" required>
                <option selected>Choose</option>
                <?php while($records = $dipendenti->fetch_assoc()){ ?>
                
                    <option value="<?php echo $records['id_dipendente'] ?>"><?php echo $records['cognome'] .  $records['nome'] ?></option>

                <?php } ?>
            </select>
        </div>
        <button class="btn btn-success" name="submit" type="submit">Vendi</button>
        <button class="btn btn-danger" type="reset">Cancella dati</button>
    </form>
</div>