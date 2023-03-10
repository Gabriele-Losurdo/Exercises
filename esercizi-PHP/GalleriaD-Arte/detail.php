<?php
    $id_quadro = $_GET['id_quadro'];
    $servername="localhost";
    $username = "root";
    $dbname="esercizi";
    $password = "root";

    global $conn;
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT artisti.cognome AS cognome,quadri.titolo,quadri.prezzo,quadri.altezza,quadri.larghezza,quadri.immagine FROM quadri
    JOIN artisti ON quadri.id_artista=artisti.ID_Artista WHERE quadri.ID_quadro=$id_quadro;";

    $quadri = $conn->query($sql);
    $records=$quadri->fetch_assoc();
    $conn->close();
?>

<div class="dettagli">
    <h3>Dettagli dell'opera <?php echo $records['titolo'] ?></h3>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Cognome Artista</span>
        <input type="text" class="form-control" value="<?php echo $records['cognome'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Prezzo</span>
        <input type="text" class="form-control" value="<?php echo $records['prezzo'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Altezza(cm)</span>
        <input type="text" class="form-control" value="<?php echo $records['altezza'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Larghezza(cm)</span>
        <input type="text" class="form-control" value="<?php echo $records['larghezza'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Immagine</span>
        <input type="text" class="form-control" value="<?php echo $records['immagine'] ?>" readonly>
    </div>
</div>