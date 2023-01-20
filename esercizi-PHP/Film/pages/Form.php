<div class="aggiungi">
  <h2>Inserisci Film</h2>
  <form method="post">
    <div class="form-group">
      <label for="Nome"><b>Nome</b></label>
      <input type="name" class="form-control" name="film[nome]">
    </div>
    <div class="form-group">
      <label for="Nome_Regista"><b>Nome_Regista</b></label>
      <input type="name" class="form-control" name="film[Nome_Regista]">
    </div>
    <div class="form-group">
      <label for="Descrizione"><b>Descrizione</b></label>
      <input type="text" class="form-control" name="film[Descrizione]">
    </div>
    <div class="form-group">
      <label for="Durata_Film"><b>Durata_Film</b></label>
      <input type="time" class="form-control" name="film[Durata_Film]">
    </div>
    <div class="form-group">
      <label for="Anno_Pubblicazione"><b>Anno_Pubblicazione</b></label>
      <input type="date" class="form-control" name="film[Anno_Pubblicazione]">
    </div>
    <div class="form-group">
      <label for="Categoria"><b>Categoria</b></label>
      <input type="text" class="form-control" name="film[Categoria]">
    </div><br>
    <button type="submit" name="aggiungi" class="btn btn-success">Invio</button>
    <button type="reset" class="btn btn-warning">Cancella</button>
  </form>
</div>