<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color:#105469">
<div class="main">
<font face="Comic sans MS" class="color" size="10">CLASSIFICA CAMPIONATO</font>

<form method="POST">
    <div class="dati" >
        
        <div class="mb-3">
            <label  class="form-label">Nome squadra: </label>
            <input type="text" class="form-control" name="Name">
        </div>

        <div class="mb-3">
            <label class="form-label">Vittorie: </label>
            <input type="text" class="form-control" name="Vittorie">
        </div>

        <div class="mb-3">
            <label class="form-label">Sconfitte: </label>
            <input type="text" class="form-control" name="Sconfitte">
        </div>

        <div class="mb-3">
            <label class="form-label">Pareggi: </label>
            <input type="text" class="form-control" name="Pareggi">
        </div>

        <div class="mb-3">
            <label class="form-label">Punti classifica: </label>
            <input type="text" class="form-control" name="Punti">
        </div>

  </div>

  <button type="submit" class="btn btn-primary" name="Invio">Invia</button> 
  <button type="reset" class="btn btn-primary" name="Cancella">Elimina</button>

</form>

</div>
<table>
  <thead>
    <tr>
      <th>ID
      <th>Squadra
      <th>Vittore
      <th>Pareggi
      <th>Sconfitte
      <th>Punti
      <th>Modifica
  </thead>
  <tbody>
    <tr>
      <td>1
      <td>Malcolm
      <td>Reynolds
      <td>Mal, Cap'n
      <td>M
      <td>
      <td><button type="submit" class="btn btn-success" name="Invio">Invia</button>
    
  </tbody>
</table>

</body>

</html>