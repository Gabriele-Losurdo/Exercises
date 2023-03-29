<?php
    $user = $_SESSION['user'];
    print_r($user);
?>

<div class="container" id="container">

    Benvenuto <?php echo $user['firstname'] ?>

</div>