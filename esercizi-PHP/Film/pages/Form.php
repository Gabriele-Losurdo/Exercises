<h2>Inserisci Film</h2>
<form method="post">
  <div class="form-group">
    <label for="Nome">Nome</label>
    <input type="name" class="form-control" name="film[nome]">
  </div>
  <div class="form-group">
    <label for="Nome_Regista">Nome_Regista</label>
    <input type="name" class="form-control" name="film[Nome_Regista]">
  </div>
  <div class="form-group">
    <label for="Descrizione">Descrizione</label>
    <input type="text" class="form-control" name="film[Descrizione]">
  </div>
  <div class="form-group">
    <label for="Durata_Film">Durata_Film</label>
    <input type="time" class="form-control" name="film[Durata_Film]">
  </div>
  <div class="form-group">
    <label for="Anno_Pubblicazione">Anno_Pubblicazione</label>
    <input type="date" class="form-control" name="film[Anno_Pubblicazione]">
  </div>
  <div class="form-group">
    <label for="Categoria">Categoria</label>
    <input type="text" class="form-control" name="film[Categoria]">
  </div>
  <button type="submit" class="btn btn-success">Invio</button>
  <button type="reset" class="btn btn-warning">Cancella</button>
</form>