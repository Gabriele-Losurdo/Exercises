<div class="aggiungi">
  <h2>Inserisci Film</h2>
  <form method="post">
    <div class="form-group">
      <label for="Titolo"><b>Titolo</b></label>
      <input type="name" class="form-control" name="film[titolo]" required>
    </div>
    <div class="form-group">
      <label for="Nome_Regista"><b>Nome_Regista</b></label>
      <input type="name" class="form-control" name="film[nome_regista]" required>
    </div>
    <div class="form-group">
      <label for="Descrizione"><b>Descrizione</b></label>
      <input type="text" class="form-control" name="film[descrizione]" required>
    </div>
    <div class="form-group">
      <label for="Durata_Film"><b>Durata_Film</b></label>
      <input type="time" class="form-control" name="film[durata_film]" required>
    </div>
    <div class="form-group">
      <label for="Anno_Pubblicazione"><b>Anno_Pubblicazione</b></label>
      <input type="date" class="form-control" name="film[anno_pubblicazione]" required>
    </div>
    <div class="form-group">
      <label for="Genere"><b>Genere</b></label>
      <input type="text" class="form-control" name="film[genere]" required>
    </div><br>
    <button type="submit" name="aggiungi" class="btn btn-success">Invio</button>
    <button type="reset" class="btn btn-warning">Cancella</button>
  </form>
</div>
<?php

if(isset($_POST['aggiungi'])){ // una volta spinto il bottone invio richiamo la funzione create che mi aggiungerà nella tabella film del database un nuovo record
  $FilmController = require('controllers/FilmController.php');
  $FilmController.create();
}

?>