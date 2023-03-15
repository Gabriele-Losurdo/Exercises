<?php
    $id_vendita=$_GET['id_vendita'];

    $servername="localhost";
    $username = "root";
    $dbname="negozioabb";
    $password = "root";

    global $conn;
    $conn = new mysqli($servername, $username, $password, $dbname);

    $articolo_venduto = $conn->query("SELECT vendite.*,dipendenti.cognome as cognome_dipendente,dipendenti.nome as nome_dipendente,
                                      articoli.codice_articolo, articoli.prezzo_listino,
                                      (articoli.prezzo_listino - vendite.prezzo * vendite.quantita) AS differenza_prezzo
                                      FROM vendite 
                                      JOIN articoli ON articoli.codice_articolo=vendite.codice_articolo
                                      JOIN dipendenti ON dipendenti.id_dipendente=vendite.id_dipendente
                                      WHERE vendite.id_vendita=$id_vendita;")->fetch_assoc();
    
    $conn->close();

?>

<div class="dettagli">
    <h3>Dettagli della vendita</h3>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Dipendente</span>
        <input type="text" class="form-control" value="<?php echo $articolo_venduto['cognome_dipendente'] . ' ' . $articolo_venduto['nome_dipendente'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Codice dell'articolo</span>
        <input type="text" class="form-control" value="<?php echo $articolo_venduto['codice_articolo'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Prezzo Listino</span>
        <input type="text" class="form-control" value="<?php echo $articolo_venduto['prezzo_listino'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Prezzo comprato</span>
        <input type="text" class="form-control" value="<?php echo $articolo_venduto['prezzo'] * $articolo_venduto['quantita'] ?>" readonly>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Differenza Prezzo</span>
        <input type="text" class="form-control" value="<?php echo $articolo_venduto['differenza_prezzo'] ?>" readonly>
    </div>
    <a href="index.php" class="btn btn-primary">Torna alla home</a>
</div>