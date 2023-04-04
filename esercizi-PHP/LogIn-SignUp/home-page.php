<?php
    $user = $_SESSION['user'];
?>

<div class="container" id="container">

    <div style="width:auto;text-align:center;padding-top:25%;"><span style="font-size:large;">Benvenuto/a <b><?php echo $user['firstname'] . ' ' . $user['lastname'] . ' (' . $user['username'] . ')' ?></b></span></div>

</div>