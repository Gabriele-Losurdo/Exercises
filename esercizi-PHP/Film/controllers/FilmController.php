<?php

function create(){ // Aggiungo nel database un nuovo record
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


/*
search

Effettuo una select con una variabile il cui valore sarà dinamico e corrisponderà a un campo della tabella film
in base alla checkbox selezionata mentre sarà default il campo genere
*/
function search($field, $attFilm_1,$attFilm_2){ 
    $conn =  $_SESSION['conn'];
    $sql="SELECT * FROM film WHERE $field LIKE \"%$attFilm_1%\" AND genere LIKE \"%$attFilm_2%\";";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['result'] = $result;
}

/*
show

effettuo una select per recuperare e poi mostrare nella tabella tutti i film inseriti
*/
function show(){
    $conn =  $_SESSION['conn'];
    $sql="SELECT * FROM film;";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['result'] = $result;

}

/*
genereList

effettuo una select per recuperare e poi mostrare in una <select> tutte le categorie inserite tranne gli eventuali doppioni
grazie a DISTINCT
*/
function genreList(){
    $conn =  $_SESSION['conn'];
    $sql="SELECT DISTINCT genere FROM film;";
    $result=$conn->query($sql);
    echo $conn->error;
    $_SESSION['genreList'] = $result;
}

?>