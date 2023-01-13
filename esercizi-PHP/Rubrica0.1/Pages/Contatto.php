<?php $menu = $_SESSION["Rubrica"]; ?>
<div class="Contatto">
    <h2>Aggiungi un nuovo contatto</h2>
        <div class="alert alert-danger" role="alert">
            Non sono ancora stati aggiunti dei contatti.
        </div>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="Nome"  required>
            </div>
            <div class="mb-3">
                <label for="Indirizzo" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" name="indirizzo" required>
            </div>
            <div class="mb-3">
                <label for="Città" class="form-label">Città</label>
                <input type="text" class="form-control" name="citta" required>
            </div>
            <div class="mb-3">
                <label for="Cellulare" class="form-label">Cellulare</label>
                <input type="decimal" class="form-control" name="cellulare" required>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" name="Email" required>
            </div>
            <button type="submit" name="Aggiorna" value="true" class="btn btn-success">Invia</button>
            <button type="reset" name="Reset" class="btn btn-danger">Cancella dati</button>
        </form>

</div>