<div class="ricerca">
<?php

$ContactController = require('controllers/ContactController.php');

?>
  <h2>Cerca un contatto</h2>
  <form method="POST" class="d-flex" role="search">
          <input class="form-control me-2" type="search" name="cognomeContatto" placeholder="Cerca contatto per cognome" aria-label="Search">
          <button class="btn btn-success" style="margin-right: 5px;" name="search" type="submit">Cerca</button>
          <button class="btn btn-primary" name="search" type="submit">Mostra elenco</button>
  </form>
  <br>
  <table class="table table-success table-striped-columns">
          <?php 
          if(!isset($_POST['search'])) { 
              $ContactController.show();
          }else{
              $ContactController.search();
          }
          $result = $_SESSION['result'];
          if($result->num_rows>0){?>
          <tr>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Societa</th>
              <th>Qualifica</th>
              <th>Email</th>
              <th>Telefono</th>
              <th>Compleanno</th>
              <th>Note</th>
          </tr>
          <?php while($records=$result->fetch_assoc()){ ?>
              <tr>
              <td><?php echo $records['nome'] ?></td>
              <td><?php echo $records['cognome'] ?></td>
              <td><?php echo $records['societa'] ?></td>
              <td><?php echo $records['qualifica'] ?></td>
              <td><?php echo $records['email'] ?></td>
              <td><?php echo $records['telefono'] ?></td>
              <td><?php echo $records['compleanno'] ?></td>
              <td><?php echo $records['note'] ?></td>
              </tr>
          <?php } 
          }else{ ?>
               <div class="alert alert-danger" role="alert">
                  Non sono ancora stati aggiunti dei contatti.
              </div>
          <?php } ?>
  </table>
</div>