<?php $menu = $_SESSION["menu"]; ?>

<div class="ordine">
    <?php if(count($menu) != 0){ ?>
    <h2>Fai un ordine</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Cog-nome" class="form-label">Cognome e Nome</label>
                <input type="text" class="form-control" name="Cog-nome" required>
            </div>
            <div class="mb-3">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" name="indirizzo" required>
                <div id="indirzzo" class="form-text">Non condivideremo mai il tuo indirizzo.</div>
            </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="sesso" value="Signor" aria-label="Radio button for following text input" required>
                    </div>
                    <input type="text" class="form-control" value="Signor" readonly>
                </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="sesso" value="Signora" aria-label="Radio button for following text input" required> 
                    </div>
                    <input type="text" class="form-control" value="Signora" readonly>
                </div>
                <br>
                <br>
                <h3>Scegli le tue pizze</h3>
                <?php for($i=0;$i<count($menu);$i++){ $j = 0;?> 
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">
                        <?php foreach($menu[$i] as $key=>$value){
                            switch($j){
                                case 0:
                                    echo $value;
                                    break;
                                case 1:
                                    echo ' (€'. $value.')';
                                    break;
                            }
                            $j++;
                        } ?>
                        </label>
                        <input type="number" class="form-control" id="inputGroupFile01" value="0" name="quantita[]" required>
                    </div>
                <?php } ?>
                        
                    
            <br>
            <button type="submit" name="Ordina" value="true" class="btn btn-success">Ordina</button>
            <button type="reset" name="Reset" class="btn btn-danger">Cancella dati</button>
        </form>
    <?php }else{ ?>
            <div class="alert alert-danger" role="alert">
                <p>Siccome non sono ancora stati aggiunti dei prodotti non è possibile effettuare ordini</p>
                <a href="Home.php?add=true">Incomincia a creare il tuo menù!</a>
            </div>
    <?php } ?>
</div>