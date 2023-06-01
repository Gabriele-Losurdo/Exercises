<?php

    function OrderFilter(){
        $conn = $_SESSION['conn']; 
        
        $query="SELECT orders.orderDate,customers.contactFirstName,customers.contactLastName 
        FROM orders JOIN customers 
        on orders.customerNumber=customers.customerNumber ";
        if(isset($_POST['submit'])){  
            $data_inizio=$_POST['data_inizio'];
            $data_fine=$_POST['data_fine'];
            $nome=$_POST['nome'];
            $cognome=$_POST['cognome'];
            $query = $query . 
            " WHERE customers.contactFirstName LIKE '%$nome%' 
            AND customers.contactLastName LIKE '%$cognome%' 
            AND orders.orderDate > '$data_inizio' AND orders.orderDate < '$data_fine'";
            
        }
        $query=$query . " ORDER BY orders.orderDate,customers.contactLastName";
        $result=$conn->query($query); 
        $_SESSION['result'] = $result;
    }