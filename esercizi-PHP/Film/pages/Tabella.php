<?php

  $FilmController = require('controllers/FilmController.php');
  

?>
<div class="film">
	<h2>Cerca un film per 
	<select class="form-select" style="width: auto;" id="type" aria-label="Default select example">
		<option value="titolo" selected>Titolo</option>
		<option value="genere">Genere</option>
		<option value="nome_regista">Nome del regista</option>
		<option value="anno_pubblicazione">Anno di pubblicazione</option>
	</select></h2>
	<div class="search">
		<form method="POST" class="d-flex" role="search">
				<input class="form-control me-2" type="search" name="attFilm" placeholder="Search film" aria-label="Search">
				<button class="btn btn-outline-success" id="attType" name="searchBy" value="titolo" type="submit">Cerca</button>
		</form>
	</div>
	<br>
	<table class="table table-success table-striped-columns">
			<?php 
			if(!isset($_POST['searchBy'])) { 
				$FilmController.show();
				$result = $_SESSION['result'];
			}else{
				$FilmController.typeOfSearch($_POST['attFilm'],$_POST['searchBy']);
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