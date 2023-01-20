<?php

function create(){
    $conne =  $_SESSION['conn'];
    
    $contatto = $_POST['contatto'];
    $sql="INSERT INTO contatti(nome,cognome,societa,qualifica,email,telefono,compleanno,note) VALUES
                ('" .$contatto['nome'] . "','" .
                $contatto['cognome'] . "','" .
                $contatto['societa'] . "','".
                $contatto['qualifica'] ."','".
                $contatto['email'] . "','".
                $contatto['telefono'] . "','".
                $contatto['compleanno'] . "','".
                $contatto['nome'] . "');";
    $result=$conne->query($sql);
}

function check(){
    $conn =  $_SESSION['conn'];
    
    $sql="SELECT * FROM contatti;";
    $result=$conn->query($sql);

    if($result->num_rows==0){ ?>
        <div class="alert alert-danger" role="alert">
            Non sono ancora stati aggiunti dei contatti.
        </div>
    <?php
    }
}

?>