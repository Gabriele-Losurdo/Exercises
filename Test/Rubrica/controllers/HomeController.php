<?php

if(!isset($_GET['meth'])){
    include('pages/aggiungi-contatto.php');
}else{
    switch ($_GET['meth']){
        case 'add':
            include('pages/aggiungi-contatto.php');
            break;
        case 'find':
            include('pages/ricerca-contatto.php');
            break;
    }
}
?>