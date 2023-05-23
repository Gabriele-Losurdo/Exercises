<?php

    function init_connection(){ // inizializzazione connessione
        session_start();
        $servername="localhost";
        $username = "5a";
        $dbname="5a_concessionario";
        $password = "dbA1dmin5";

        global $conn;
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $_SESSION['conn'] = $conn;
        
    }

    function destroy_connection(){ // chiusura connessione
        $conn = $_SESSION['conn'];
        $conn->close();
        session_destroy();
    }

/*
altre credenziali
"5a"
"5a_cinema"
"dbA1dmin5"
*/
?>