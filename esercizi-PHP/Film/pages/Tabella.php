<?php

  $FilmController = require('controllers/FilmController.php');
  

?>
<div class="film">
	<h2>Cerca un film</h2>
	<form method="POST" class="d-flex" role="search">
			<input class="form-control me-2" type="search" name="nomeFilm" placeholder="Search film" aria-label="Search">
			<button class="btn btn-outline-success" name="search" ype="submit">Search</button>
	</form>
	<br>
	<table class="table table-success table-striped-columns">
			<?php 
			if(!isset($_POST['search'])) { 
				$FilmController.show();
				$result = $_SESSION['result'];
			}else{
				$FilmController.search();
				$result = $_SESSION['result'];
			}
			if($result->num_rows>0){?>
			<tr>
				<th>Nome</th>
				<th>Nome Regista</th>
				<th>Descrizione</th>
				<th>Durata</th>
				<th>Anno Pubblicazione</th>
				<th>Categoria</th>
			</tr>
			<?php while($records=$result->fetch_assoc()){ ?>
				<tr>
				<td><?php echo $records['nome'] ?></td>
				<td><?php echo $records['nome_regista'] ?></td>
				<td><?php echo $records['descrizione'] ?></td>
				<td><?php echo $records['durata_film'] ?></td>
				<td><?php echo $records['anno_pubblicazione'] ?></td>
				<td><?php echo $records['categoria'] ?></td>
				</tr>
			<?php } 
			}else{ ?>
				 <div class="alert alert-danger" role="alert">
					Non sono ancora stati aggiunti dei film.
				</div>
			<?php } ?>
	</table>
</div>