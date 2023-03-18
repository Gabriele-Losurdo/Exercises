    <?php
    $servername="localhost";
    $username = "root";
    $dbname="esercizi";
    $password = "root";

    global $conn;
    $conn = new mysqli($servername, $username, $password, $dbname);
    $cognome = '';
    if(isset($_POST['search'])){
        $cognome = $_POST['cognomeArtista'];
    }
    $sql = "SELECT tecniche.tecnica,artisti.cognome AS cognome,quadri.ID_quadro,quadri.titolo,quadri.prezzo,quadri.altezza,quadri.larghezza,quadri.immagine FROM quadri
    JOIN artisti ON quadri.id_artista=artisti.ID_Artista JOIN tecniche ON tecniche.ID_tecnica=quadri.id_tecnica WHERE cognome LIKE '%$cognome%';";
    $quadri = $conn->query($sql);
    
    ?>
    <div class="catalogo">
    <h3>Catalogo</h3>
    
    <form method="POST" class="d-flex" role="search">
            <input class="form-control me-2" type="search" name="cognomeArtista" placeholder="Cerca opera per cognome dell'artista" aria-label="Search">
            <button class="btn btn-success" style="margin-right: 5px;" name="search" type="submit">Cerca</button>
            <a href="" class="btn btn-primary" name="submit" type="submit">Mostra elenco</a>
    </form><br>
    <table class="table table-success table-striped-columns">
          <?php if($quadri->num_rows>0){?>
          <tr>
              <th>Artista</th>
              <th>Titolo</th>
              <th>Altezza</th>
              <th>Larghezza</th>
              <th>Prezzo</th>
              <th>Tecnica</th>
              <th>Immagine</th>
              <th>Dettagli</th>
          </tr>
          <?php while($records=$quadri->fetch_assoc()){ ?>
              <tr>
              <td><?php echo $records['cognome'] ?></td>
              <td><?php echo $records['titolo'] ?></td>
              <td><?php echo $records['altezza'] ?></td>
              <td><?php echo $records['larghezza'] ?></td>
              <td><?php echo $records['prezzo'] ?></td>
              <td><?php echo $records['tecnica'] ?></td>
              <td><?php echo $records['immagine'] ?></td>
              <td><a href="index.php?detail=true&id_quadro=<?php echo $records['ID_quadro'] ?>" class="btn btn-info">Guarda di più</a></td>
              </tr>
          <?php } 
          }else{ ?>
               <div class="alert alert-danger" role="alert">
                  Non sono state trovate opere nel catalogo!
              </div>
          <?php } ?>
    </table>
    </div>
    <?php $conn->close() ?>