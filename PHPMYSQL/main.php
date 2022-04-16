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
        $sql = "INSERT INTO utenti(nome,cognome,email) VALUES( ?, ?, ?);";
        if($statement = $connection->prepare($sql)){
            $statement -> bind_param("sss",$nome,$cognome,$email);

            $nome = $_POST['nome'];
            $cognome = $_POST['cognome'];
            $email = $_POST['e-mail'];
            $sql2 = "SELECT * FROM utenti WHERE email ='$email';";
            if($result2 = $connection -> query($sql2)){
                if($result2->num_rows > 0){
                    echo "Hai già creato un account con questa email.
                    <a href='signin.php' >Torna alla pagina iniziale</a>
                    ";
                }else{
                    $statement -> execute();
                    $sql = "SELECT * FROM utenti;";
                    if($result = $connection -> query($sql)){
                        if($result->num_rows > 0){
                            echo '<table><thead>
                            <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>E-mail</th>
                            </tr></thead><tbody>
                            ';
                            while($row = $result->fetch_array()){
                                echo '
                                <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['nome'].'</td>
                                <td>'.$row['cognome'].'</td>
                                <td>'.$row['email'].'</td>
                                </tr>
                                ';
                            }
                            echo '</tbody></table>';
                        }
                    }

                }
            }
        }

        $statement -> close();

        $connection->close();
    ?>
</body>
</html>