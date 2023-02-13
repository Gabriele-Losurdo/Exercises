<?php

    function init_connection(){
        session_start();
        $servername="localhost";
        $username = "root";
        $dbname="5a_cinema";
        $password = "root";

        global $conn;
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $_SESSION['conn'] = $conn;
        
    }

    function destroy_connection(){
        $conn = $_SESSION['conn'];
        $conn->close();
        session_destroy();
    }

/*
$servername="localhost";
$username = "5a";
$dbname="5a_cinema";
$password = "dbA1dmin5";
*/
?>