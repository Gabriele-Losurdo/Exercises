<?php

switch($_GET['meth']){
    case 'add':
        include('pages/Form.php');
        switch(isset($_POST['invio'])){
            case true:
                break;
            }
        break;

    case 'ele':
        include('pages/Tabella.php');
        break;

    default:
        include('pages/Form.php');
        break;
}

?>