<div class="addQuadro">
    <h3>Aggiungi un quadro al catalogo</h3>

<?php

$servername="localhost";
$username = "root";
$dbname="esercizi";
$password = "root";

global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['aggiungi'])){
    $quadro = $_POST['quadro'];
    $quadro['titolo'] = mysqli_real_escape_string($conn, $quadro['titolo']);
    $quadro['img'] = mysqli_real_escape_string($conn, $quadro['img']);
    $sql = "INSERT INTO quadri (id_artista, id_tecnica, titolo, altezza, larghezza, prezzo, immagine) VALUES
    (". $quadro['artista'].",".$quadro['tecnica'].",'".$quadro['titolo']."',".$quadro['altezza'].",".$quadro['larghezza'].",".$quadro['prezzo'].",'".$quadro['img']."');";
    try
    {
        $nuovo_quadro = $conn->query($sql);
        $sql = "SELECT * FROM quadri ORDER BY ID_quadro DESC LIMIT 1;";
        $quadro = ($conn->query($sql))->fetch_assoc();
        ?>

        <div class="alert alert-success">
            Il quadro è stato aggiunto con successo!
            <a href="index.php?detail=true&id_quadro=<?php echo $quadro['ID_quadro'] ?>" class="btn btn-info"> Dettagli</a>
        </div>

        <?php
    }
    catch (mysqli_sql_exception $e)
    {
        ?>

        <div class="alert alert-danger">
            Il quadro non è stato aggiunto a causa di un errore!
        </div>

        <?php
    }

}

$sql = "SELECT * FROM tecniche";
$tecniche = $conn->query($sql);

$sql = "SELECT * FROM artisti";
$artisti = $conn->query($sql);

$conn->close();

?>
    <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Titolo</span>
            <input type="text" maxlength="40" class="form-control" name="quadro[titolo]" required>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Cognome Artista</label>
            <select name="quadro[artista]" class="form-select" id="inputGroupSelect01" required>
                <?php while($records = $artisti->fetch_assoc()){ ?>
                
                    <option value="<?php echo $records['ID_Artista'] ?>"><?php echo $records['cognome'] ?></option>

                <?php } ?>
            </select>
        </div>
        
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Prezzo</span>
            <input type="decimal" max="10,2" class="form-control" name="quadro[prezzo]" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Altezza(cm)</span>
            <input type="number" min="0" max="32767" id="altezza" class="form-control" name="quadro[altezza]" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Larghezza(cm)</span>
            <input type="number" min="0" max="32767" id="larghezza" class="form-control" name="quadro[larghezza]" required>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Tecnica</label>
            <select name="quadro[tecnica]" class="form-select" id="inputGroupSelect01" required>
                <?php while($records = $tecniche->fetch_assoc()){ ?>
                
                    <option value="<?php echo $records['ID_tecnica'] ?>"><?php echo $records['tecnica'] ?></option>

                <?php } ?>
            </select>
        </div>
        
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Immagine</span>
            <input type="text" maxlength="255" class="form-control" name="quadro[img]" required>
        </div>
        <button type="submit" name="aggiungi" class="btn btn-success">Invia</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>