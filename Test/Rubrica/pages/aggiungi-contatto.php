<div class="contatto">
    <h2>Aggiungi un nuovo contatto</h2>
    <?php 
    $rubrica = require 'controllers/ContactController.php';
    if(isset($_POST['aggiungi'])){
        $rubrica.create();
    }
    ?>
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome</span>
                <input type="text" class="form-control" name="contatto[nome]"  required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Cognome</span>
                <input type="text" class="form-control" name="contatto[cognome]" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Società</span>
                <input type="text" class="form-control" name="contatto[societa]" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Qualifica</span>
                <input type="text" class="form-control" name="contatto[qualifica]" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" class="form-control" name="contatto[email]" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Telefono</span>
                <input type="number" class="form-control" name="contatto[telefono]" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Compleanno</span>
                <input type="date" class="form-control" name="contatto[compleanno]" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Note</span>
                <input type="text" class="form-control" name="contatto[note" required>
            </div>
            <button type="submit" name="aggiungi" class="btn btn-success">Invia</button>
            <button type="reset" name="Reset" class="btn btn-danger">Cancella dati</button>
        </form>

</div>