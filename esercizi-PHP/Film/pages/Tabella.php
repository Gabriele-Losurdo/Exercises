<?php

$FilmController = require('controllers/FilmController.php');
$FilmController.genreList();
if(!isset($_POST['search'])) { 
	$FilmController.show();
}else{
	$FilmController.search($_POST['searchBy'],$_POST['attFilm'],$_POST['genere']);
}
$genreList = $_SESSION['genreList'];

$result = $_SESSION['result'];

?>
<div class="film">
	<h2>Cerca un film per </h2>
	<div class="search">
		<form method="POST" class="d-flex" role="search">

		<div class="form-check">
			<input class="form-check-input" type="radio" name="searchBy" value="titolo" id="flexRadioDefault1" required>
			<label class="form-check-label" for="flexRadioDefault1">Titolo </label>
		</div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="searchBy" value="nome_regista" id="flexRadioDefault1" required>
			<label class="form-check-label" for="flexRadioDefault1">Nome regista </label>
		</div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="searchBy" value="anno_pubblicazione" id="flexRadioDefault1" required>
			<label class="form-check-label" for="flexRadioDefault1">Anno </label>
		</div>

		<?php
		if($genreList->num_rows>0){?>
		<select class="form-select" name="genere" style="margin-left:20px;margin-right:20px;"aria-label="Default select example" required>
			<option selected>Scegli una categoria</option>
			
			<?php while($records=$genreList->fetch_assoc()){ ?>
				<option value="<?php echo $records['genere'] ?>"><?php echo $records['genere'] ?></option>
			<?php } 
		} ?>
		</select>
			<input class="form-control me-2" type="search" name="attFilm" placeholder="Search film" aria-label="Search">
			<button class="btn btn-outline-success" id="attType" name="search" type="submit">Cerca</button>
		</form>
	</div>
	<br>
	<table class="table table-success table-striped-columns">
			<?php 
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