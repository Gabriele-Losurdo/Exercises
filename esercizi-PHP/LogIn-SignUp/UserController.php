<?php

    $servername="localhost";
    $username = "root";
    $dbname="esercizi";
    $password = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    function signin()
    {
        global $conn;
        try
        {
            $user = $_POST["user"];
            $user['pwd']=md5($user['pwd']);
            $query = "SELECT * FROM users WHERE username=? AND password=? ;";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss",$user['username'],$user['pwd']);
            $stmt->execute();
            $result=($stmt->get_result())->fetch_assoc();
            if(count($result)>0){
                $_SESSION["user"] = $result;
                $stmt->close();
                return header('Location: index.php?access=true');
                exit();
            }
            else
            {
                ?>
                    <div class="alert alert-danger">
                        Username o password errati!
                    </div>
                <?php
            }
        }
        catch(Exception $e)
        {
            ?>
                <div class="alert alert-danger">
                    Qualcosa è andato storto!
                </div>
            <?php
        }
    }

    function signup()
    {
        
        global $conn;
        
        try
        {
            $user = $_POST["user"];
            $user['pwd']=md5($user['pwd']);
            $query = "INSERT INTO users(firstname,lastname,email,username,password) VALUES(?,?,?,?,?);";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sssss",$user['firstname'],$user['lastname'],$user['email'],$user['username'],$user['pwd']);
            $stmt->execute();
            $query = "SELECT * FROM users ORDER BY id DESC LIMIT 1;";
            $result = ($conn->query($query))->fetch_assoc();
            $_SESSION["user"] = $result;
            $stmt->close();
            return header('Location: index.php?access=true');
            exit();
        }
        catch(Exception $e)
        {
            ?>
                <div class="alert alert-danger">
                    Username o email già utilizzati <?php echo $conn->error ?>!
                </div>
            <?php
        }
    }

    /*
    $servername="localhost";
    $username = "5a";
    $dbname="5a_website";
    $password = "dbA1dmin5";
    */
?>

<!--
$sql = "CREATE TABLE users(\n"

    . "    id int not null PRIMARY KEY AUTO_INCREMENT,\n"

    . "    username varchar(20) not null UNIQUE,\n"

    . "    firstname varchar(50) not null,\n"

    . "    lastname varchar(50) not null,\n"

    . "    pwd varchar(30) not null\n"

    . ")";

*/-->