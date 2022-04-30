<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Utenti</title>
    <style>
        table,td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
        $host = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "provalogin";
        $connection = new mysqli($host,$user,$password,$database);
        if($_POST["submit"]==="SignUp"){
            $sql = "INSERT INTO utenti(username,email,pw) VALUES( ?, ?, ?);";
            if($statement = $connection->prepare($sql)){
                $statement -> bind_param("sss",$username,$email,$pw);

                $username = $_POST['username'];
                $email = $_POST['e-mail'];
                $pw = $_POST['password'];
                $cpw = $_POST['cpassword'];
                if($pw!=$cpw){
                    header('HTTP/1.1 301 Moved Permanently');
                    header('Location: http://localhost/PHPMYSQL/index.php?value=SignUp');
                }else{
                    $sql2 = "SELECT * FROM utenti WHERE email ='$email' or username ='$username';";
                    if($result2 = $connection -> query($sql2)){
                        if($result2->num_rows > 0){
                            echo "E stato gia creato un account con questa email o username!<br>
                            <a href='index.php' >Torna alla pagina iniziale</a>
                            ";
                        }else{
                            $statement -> execute();
                            $sql3 = "SELECT * FROM utenti;";
                            if($result = $connection -> query($sql3)){
                                if($result->num_rows > 0){
                                    echo '<table><thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>E-mail</th>
                                    <th>Password</th>
                                    </tr></thead><tbody>
                                    ';
                                    while($row = $result->fetch_array()){
                                        echo '
                                        <tr>
                                        <td>'.$row['id'].'</td>
                                        <td>'.$row['username'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['pw'].'</td>
                                        </tr>
                                        ';
                                    }
                                    echo '</tbody></table>';
                                }
                            }
    
                        }
                    }

                }
            }
            $statement -> close();
        }else if($_POST["submit"]==="LogIn"){// login
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM utenti WHERE username = '$username'";
            if($result = $connection -> query($sql)){
                if($result ->num_rows > 0){
                    $row = $result->fetch_array();
                    if($row['pw']==$password){
                        echo 'Benvenuto!
                            Username: '.$row['username'].'<br>
                            E-mail: '.$row['email'].'<br>
                            Password: '.$row['pw'].'<br>'
                        ;
                        echo "------------------------------------------------------------------------------------------------------------------------";
                        $sql = "SELECT * FROM utenti;";
                        if($result = $connection -> query($sql)){
                            if($result->num_rows > 0){
                                echo '<table><thead>
                                <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>E-mail</th>
                                <th>Password</th>
                                </tr></thead><tbody>
                                ';
                                while($row = $result->fetch_array()){
                                    echo '
                                    <tr>
                                    <td>'.$row['id'].'</td>
                                    <td>'.$row['username'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['pw'].'</td>
                                    </tr>
                                    ';
                                }
                                echo '</tbody></table>';
                            }
                        }
                    }else{
                        echo 'La password è sbagliata!<br>
                        <a href="index.php?value=SignIn">Torna al pagina di Login!</a>
                        ';
                    }
                }else{
                    echo 'Non esiste nessun utente con questo username!<br>
                    <a href="index.php?value=SignIn">Torna al pagina di Login!</a>
                    ';
                }
            }
        }
        


        $connection->close();
    ?>
</body>
</html>