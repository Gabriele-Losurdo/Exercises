<?php

    function init_connection(){
        $servername="localhost";
        $username = "5infa";
        $dbname="5infa_db1";
        $password = "5infadbpass";

        global $conn;
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $_SESSION['conn'] = $conn;
    }

?>