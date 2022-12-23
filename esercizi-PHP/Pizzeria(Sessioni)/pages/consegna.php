<?php 
$menu = $_SESSION["menu"]; 
$quantita_pizze = $_POST['quantita'];
$prezzo = 0;
$prezzo_totale_pizze = 0;
?>
<div class="consegna">
        <p> Egr. <?php echo $_POST['sesso'] . ' ' . $_POST['Cog-nome'] ?></p>
        <p>Consegneremo le vostre pizze:</p>
        <?php for($i=0;$i<count($quantita_pizze);$i++){ 
                $j=0;
                if($quantita_pizze[$i] != 0){?>
                        <p><?php echo $quantita_pizze[$i] .' - '?>
                        <?php foreach($menu[$i] as $key=>$value){
                            switch($j){
                                case 0:
                                    echo $value;
                                    break;
                                case 1:
                                    echo ' € '. $value*$quantita_pizze[$i];
                                    $prezzo_totale_pizze += $value*$quantita_pizze[$i];
                                break;
                            }
                            $j++;
                        } ?>
                        </p>
                <?php } ?>
        
        <?php } ?>
        <p>in 20 minuti consegneremo a questo indirizzo:</p>
        <?php echo $_POST['indirizzo'] ?>
        <p></p>
        <hr>
        <hr>
        <p>Totale pizze € <?php echo $prezzo_totale_pizze ?></p>
        <p>Il vostro Pizza-Team</p>
</div>