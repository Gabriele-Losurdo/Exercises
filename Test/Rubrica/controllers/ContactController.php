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

function search(){
    $conn =  $_SESSION['conn'];
    $nome_contatto_cercato = $_POST['cognomeContatto'];
    $sql="SELECT * FROM contatti WHERE cognome LIKE \"%$nome_contatto_cercato%\";";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['result'] = $result;
}

function show(){
    $conn =  $_SESSION['conn'];
    $sql="SELECT * FROM contatti;";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['result'] = $result;

}

?>