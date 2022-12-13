<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .ordine {
            margin: 0 auto;
            width: 900px;
        }

        .input-group {
            width:fit-content;
        }
    </style>
</head>
<body>
    <div class="ordine">
        <h2>Pizzeria da Ciro</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Cog-nome" class="form-label">Cognome e Nome</label>
                <input type="text" class="form-control" name="Cog-nome">
            </div>
            <div class="mb-3">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" name="indirizzo">
                <div id="emailHelp" class="form-text">Non condivideremo mai il tuo indirizzo.</div>
            </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="sesso" value="Signor" aria-label="Radio button for following text input">
                    </div>
                    <input type="text" class="form-control" value="Signor" readonly>
                </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="sesso" value="Signora" aria-label="Radio button for following text input"> 
                    </div>
                    <input type="text" class="form-control" value="Signora" readonly>
                </div>
            <br>
            <button type="submit" name="Ordina" class="btn btn-primary">Ordina</button>
            <button type="reset" name="Reset" class="btn btn-primary">Cancella dati</button>
        </form>
    </div>

    <div class="caricamento">
        <form action="" class="post">

        </form>
    </div>
</body>
</html>