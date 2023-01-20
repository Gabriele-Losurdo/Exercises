<?php

if(!isset($_GET['meth'])){
    include('pages/Form.php');
}else{
    switch($_GET['meth']){
        case 'add':
            include('pages/Form.php');
            break;

        case 'ele':
            include('pages/Tabella.php');
            break;
    }
}

?>