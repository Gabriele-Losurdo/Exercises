<?php

function create(){
    $conn =  $_SESSION['conn'];
    
    $film = $_POST['film'];
    $sql="INSERT INTO film(titolo,nome_regista,descrizione,durata_film,anno_pubblicazione,genere) VALUES
                (\"" .$film['titolo'] . "\",\"" .
                $film['nome_regista'] . "\",\"" .
                $film['descrizione'] . "\",\"".
                $film['durata_film'] ."\",\"".
                $film['anno_pubblicazione'] . "\",\"".
                $film['genere'] . "\");";
    $result=$conn->query($sql);
    //echo $conn->error;
}

function search($field, $attFilm_1,$attFilm_2){
    $conn =  $_SESSION['conn'];
    $sql="SELECT * FROM film WHERE $field LIKE \"%$attFilm_1%\" AND genere LIKE \"%$attFilm_2%\";";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['result'] = $result;
}

function show(){
    $conn =  $_SESSION['conn'];
    $sql="SELECT * FROM film;";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['result'] = $result;

}

function genreList(){
    $conn =  $_SESSION['conn'];
    $sql="SELECT DISTINCT genere FROM film;";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['genreList'] = $result;
}

?>