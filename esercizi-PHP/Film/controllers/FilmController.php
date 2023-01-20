<?php
function create(){
    $conn =  $_SESSION['conn'];
    
    $film = $_POST['film'];
    $sql="INSERT INTO film(nome,nome_regista,descrizione,durata_f,anno_pubb,categoria) VALUES
                ('" .$film['nome'] . "','" .
                $film['Nome_Regista'] . "','" .
                $film['Descrizione'] . "','".
                $film['Durata_Film'] ."','".
                $film['Anno_Pubblicazione'] . "','".
                $film['Categoria'] . "');";
    $result=$conn->query($sql);
    echo $conn->error;
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