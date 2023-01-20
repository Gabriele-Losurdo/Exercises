<?php

function create(){
    $conn =  $_SESSION['conn'];
    
    $film = $_POST['film'];
    $sql="INSERT INTO film(nome,nome_regista,descrizione,durata_film,anno_pubblicazione,categoria) VALUES
                (\"" .$film['nome'] . "\",\"" .
                $film['nome_regista'] . "\",\"" .
                $film['descrizione'] . "\",\"".
                $film['durata_film'] ."\",\"".
                $film['anno_pubblicazione'] . "\",\"".
                $film['categoria'] . "\");";
    $result=$conn->query($sql);
    //echo $conn->error;
}

function search(){
    $conn =  $_SESSION['conn'];
    $nome_film_cercato = $_POST['nomeFilm'];
    $sql="SELECT * FROM film WHERE nome LIKE \"%$nome_film_cercato%\";";
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
/*
if($result->num_rows>0){
 
while($riga=$result->fetch_assoc()){
    echo "cognome: ".$riga["cognome"]." matricola: ".$riga["matricola"]."<br>";
}
}else{
    echo"Empty set";
}*/
?>