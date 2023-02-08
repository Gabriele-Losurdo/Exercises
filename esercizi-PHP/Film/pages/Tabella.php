<?php

  $FilmController = require('controllers/FilmController.php');
  

?>
<div class="film">
	<h2>Cerca un film per </h2>
	<div class="search">
		<form method="POST" class="d-flex" role="search">

		<div class="form-check">
			<input class="form-check-input" type="radio" name="searchBy" value="titolo" id="flexRadioDefault1">
			<label class="form-check-label" for="flexRadioDefault1">
				Titolo
			</label>

			<input class="form-check-input" type="radio" name="searchBy" value="nome_regista" id="flexRadioDefault1">
			<label class="form-check-label" for="flexRadioDefault1">
				Nome regista
			</label>

			<input class="form-check-input" type="radio" name="searchBy" value="anno_pubblicazione" id="flexRadioDefault1">
			<label class="form-check-label" for="flexRadioDefault1">
				Anno
			</label>
		</div>
			<input class="form-control me-2" type="search" name="attFilm" placeholder="Search film" aria-label="Search">
			<button class="btn btn-outline-success" id="attType" name="search" type="submit">Cerca</button>
		</form>
	</div>
	<br>
	<table class="table table-success table-striped-columns">
			<?php 
			if(!isset($_POST['search'])) { 
				$FilmController.show();
				$result = $_SESSION['result'];
			}else{
				$FilmController.typeOfSearch($_POST['searchBy'],$_POST['attFilm']);
				$result = $_SESSION['result'];
			}
			if($result->num_rows>0){?>
			<tr>
				<th>Titolo</th>
				<th>Nome Regista</th>
				<th>Descrizione</th>
				<th>Durata</th>
				<th>Anno Pubblicazione</th>
				<th>Genere</th>
			</tr>
			<?php while($records=$result->fetch_assoc()){ ?>
				<tr>
				<td><?php echo $records['titolo'] ?></td>
				<td><?php echo $records['nome_regista'] ?></td>
				<td><?php echo $records['descrizione'] ?></td>
				<td><?php echo $records['durata_film'] ?></td>
				<td><?php echo $records['anno_pubblicazione'] ?></td>
				<td><?php echo $records['genere'] ?></td>
				</tr>
			<?php } 
			}else{ ?>
				 <div class="alert alert-danger" role="alert">
					Non sono stati trovati dei film.
				</div>
			<?php } ?>
	</table>
</div>