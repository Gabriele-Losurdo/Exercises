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

function search($field, $attFilm){
    $conn =  $_SESSION['conn'];
    $valore = $attFilm;
    $sql="SELECT * FROM film WHERE $field LIKE \"%$valore%\";";
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

function typeOfSearch($attFilm,$searchBy){
    switch ($searchBy){
        case 'titolo':
            search('titolo',$attFilm);
            break;
        case 'nome_regista':
            search('nome_regista',$attFilm);
            break;
        case 'genere':
            search('genere',$attFilm);
            break;
        case 'anno_pubblicazione':
            search('anno_pubblicazione',$attFilm);
            break;
    }
}
?>