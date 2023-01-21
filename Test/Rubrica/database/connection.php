<?php

    function init_connection(){
        $servername="localhost";
        $username = "root";
        $dbname="rubrica";
        $password = "root";

        global $conn;
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $query = "CREATE TABLE IF NOT EXISTS contatti(
            id INT NOT NULL AUTO_INCREMENT,
            nome VARCHAR(40) NOT NULL,
            cognome VARCHAR(40) NOT NULL,
            societa VARCHAR(70) NOT NULL,
            qualifica VARCHAR(40) NOT NULL,
            email VARCHAR(100) NOT NULL,
            telefono VARCHAR(10) NOT NULL,
            compleanno DATE NOT NULL,
            note VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)
        );";
        $conn->query($query);
        $_SESSION['conn'] = $conn;
    }

    function destroy_connection(){
        $conn = $_SESSION['conn'];
        $conn->close();
        session_destroy();
    }

?>