<html>
    <head>
        <title>Elenco Album</title>
    </head>
    <body>
        <?php
            $link = 'localhost';
            $username = 'root';
            $password = 'root';
            $database = 'esercizi';

            $conn = new mysqli($link,$username,$password,$database)
                        or die('Parametri della connessione errati.');
            
            if(isset($_POST['cerca'])){
                
                $titolo = $_POST['titolo'];

                $sql = "SELECT album.Titolo,album.URL_Immagine,album.Durata,generi.Denominazione as Genere,
                artisti.Denominazione as Artista FROM album
                JOIN generi
                ON album.IDGenere = generi.IDGenere
                JOIN artisti
                ON album.IDArtista = artisti.IDArtista
                WHERE album.Titolo LIKE '%$titolo%';";

            }
            else
            {

                $sql = "SELECT album.Titolo,album.URL_Immagine,album.Durata,generi.Denominazione as Genere,
                artisti.Denominazione as Artista FROM album
                JOIN generi
                ON album.IDGenere = generi.IDGenere
                JOIN artisti
                ON album.IDArtista = artisti.IDArtista;";
            
            }

            $result = $conn->query($sql)
                        or die('Errore nell\'esecuzione della ricerca');

            $conn->close();
        ?>

        <h1>Elenco Album</h1>
        <div>
            <b>Cerca un album per titolo</b>
            <form method="POST" action="">
                <input type="text" name='titolo' placeholder='Titolo'>
                <button type="submit" name="cerca">Cerca Album</button>
            </form>
            <table style="border:1px solid black">
                <thead>
                    <th style="border:1px solid black;">Titolo</th>
                    <th style="border:1px solid black;">Immagine Copertina</th>
                    <th style="border:1px solid black;">Durata</th>
                    <th style="border:1px solid black;">Genere</th>
                    <th style="border:1px solid black;">Artista (Denominazione)</th>
                </thead>
                <tbody>
                    <?php 
                        if($result->num_rows>0){
                            while($row = $result->fetch_array()){ ?>
                            <tr>
                                <td style="border:1px solid black;"> <?php echo $row['Titolo'] ?></td>
                                <td style="border:1px solid black;"> <?php echo $row['URL_Immagine'] ?></td>
                                <td style="border:1px solid black;"> <?php echo $row['Durata'] ?></td>
                                <td style="border:1px solid black;"> <?php echo $row['Genere'] ?></td>
                                <td style="border:1px solid black;"> <?php echo $row['Artista'] ?></td>
                            </tr>
                        <?php }
                        }else{ ?>
                            <div>
                                <p>Non sono stati trovati album! Controlla bene il titolo dell'album che stai cercando...</p>
                            </div>
                        <?php } ?>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
            <a href="aggiungi-album.php">Inserisci degli album cliccando su questo link!</a>
        </div>


    </body>
</html>