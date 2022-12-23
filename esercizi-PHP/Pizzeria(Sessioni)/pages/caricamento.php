<?php $menu = $_SESSION["menu"]; ?>
<div class="caricamento">
    <?php if(count($menu) != 0){ ?>
        <table class="table table-success table-striped-columns">
                <tr  class="table-success">
                    <th>#</th>
                    <th>Prodotto</th>
                    <th>Prezzo (€)</th>    
                </tr>
                <?php for($i=0;$i<count($menu);$i++){ ?> 
                    <tr  class="table-success">
                        <td><?php echo $i ?></td>
                    <?php foreach($menu[$i] as $key=>$value){?>
                
                    <td><?php echo $value ?></td>  
                
                    <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </table>
    <?php }else{ ?>
        <div class="alert alert-danger" role="alert">
            Non sono ancora stati aggiunti dei prodotti.
        </div>
    <?php } ?>
    
        <form action="" method="post">
            <div class="mb-3">
                <label for="prodotto" class="form-label">Prodotto</label>
                <input type="text" class="form-control" name="prodotto"  required>
            </div>
            <div class="mb-3">
                <label for="prezzo" class="form-label">Prezzo</label>
                <input type="decimal" class="form-control" name="prezzo" required>
            </div>
            <button type="submit" name="Aggiorna" value="true" class="btn btn-success">Invia</button>
            <button type="reset" name="Reset" class="btn btn-danger">Cancella dati</button>
        </form>

</div>