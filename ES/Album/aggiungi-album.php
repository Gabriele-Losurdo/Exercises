<html>
    <head>
        <title>Inserisci Artisti</title>
    </head>
    <body>
        <?php

        $link = 'localhost';
        $username = 'root';
        $password = 'root';
        $database = 'esercizi';

        $conn = new mysqli($link,$username,$password,$database)
                    or die('Parametri della connessione errati.');
        
        if(isset($_POST['inseriscialbum']))
        {

            $album = $_POST['album'];
            $sql = "INSERT INTO album(Titolo,Durata,URL_Immagine,IDGenere,IDArtista) 
            VALUES('". $album['Titolo']. "'," .$album['Durata'] .", '". $album['URL_Immagine']."' ,". $album['IDGenere'].",". $album['IDArtista'].");";

            $conn->query($sql)
                or die('Errore nell\'inserimento del nuovo album');
        }

        $sql_artisti = "SELECT * FROM artisti;";
        $artisti = $conn->query($sql_artisti);

        $sql_generi = "SELECT IDGenere,Denominazione FROM generi;";
        $generi = $conn->query($sql_generi);

        $conn->close();

        ?>
        <form method="POST" action="">
            <input type="text" name='album[Titolo]' placeholder="Titolo"><br>
            <input type="number" name='album[Durata]' placeholder="Durata in minuti"><br>
            <input type="text" name='album[URL_Immagine]' placeholder="Inserisci l'url dell'immagine"><br>
            <label for="Genere">Genere:</label>
            <select id='Genere'name="album[IDGenere]">
                <?php while($row = $generi->fetch_assoc()){ ?>

                    <option value="<?php echo $row['IDGenere'] ?>"><?php echo $row['Denominazione'] ?></option>

                <?php } ?>
            </select><br>
            <label for="Artista">Artista:</label>
            <select id='Artista'name="album[IDArtista]">
                <?php while($row = $artisti->fetch_assoc()){ ?>

                    <option value="<?php echo $row['IDArtista'] ?>"><?php echo $row['Denominazione'] ?></option>

                <?php } ?>
            </select>
            <button name="inseriscialbum">Invia</button>
        </form>
        <a href="index.php">Torna alla elenco degli album.</a>
    </body>
</html>