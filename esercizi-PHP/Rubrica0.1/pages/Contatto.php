<?php $Rubrica = $_SESSION["Rubrica"]; ?>
<div class="Contatto">
    <h2>I tuoi contatti:</h2>
         <?php if(count($Rubrica) != 0){ ?>
        <table class="table table-success table-striped-columns">
                <tr  class="table-success">
                    <th>#</th>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Indirizzo</th>
                    <th>Città</th>
                    <th>Provincia</th>
                    <th>Cellulare</th>
                    <th>Email</th>    
                </tr>
                <?php for($i=0;$i<count($Rubrica);$i++){ ?> 
                    <tr  class="table-success">
                        <td><?php echo $i ?></td>
                    <?php foreach($Rubrica[$i] as $key=>$value){?>
                
                    <td><?php echo $value ?></td>  
                
                    <?php } ?>
                    </tr>
                <?php } ?>
        </table>
    <?php }else{ ?>
        <div class="alert alert-danger" role="alert">
            Non sono ancora stati aggiunti dei prodotti.
        </div>
    <?php } ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="Nome"  required>
            </div>
            <div class="mb-3">
                <label for="Città" class="form-label">Cognome</label>
                <input type="text" class="form-control" name="Cognome" required>
            </div>
            <div class="mb-3">
                <label for="Indirizzo" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" name="Indirizzo" required>
            </div>
            <div class="mb-3">
                <label for="Città" class="form-label">Città</label>
                <input type="text" class="form-control" name="Città" required>
            </div>
            <div class="mb-3">
                <label for="Città" class="form-label">Provincia</label>
                <input type="text" class="form-control" name="Provincia" required>
            </div>
            <div class="mb-3">
                <label for="Cellulare" class="form-label">Cellulare</label>
                <input type="decimal" class="form-control" name="Cellulare" required>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" class="form-control" name="Email" required>
            </div>
            <button type="submit" name="Aggiorna" value="true" class="btn btn-success">Invia</button>
            <button type="reset" name="Reset" class="btn btn-danger">Cancella dati</button>
        </form>
</div>