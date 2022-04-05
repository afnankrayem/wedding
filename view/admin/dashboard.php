<?php include "header.php"; ?>
<div class="sp-lg"></div>
<div class="sp-lg"></div>
<div class="container-fluid">
  <div class="controls">
    <button class="add"><i class="bi bi-person-plus"></i></button>
  </div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Nom et prénom</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Date d'inscription</th>
      <th scope="col">Etat</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">#</th>
      <td>Mark</td>
      <td>12345678</td>
      <td>02/03/2022</td>
      <td>Active</td>
      <td class="actions">
      <a href="#"><i class="bi bi-eye show-client"></i></a>
      <a href="#"><i class="bi bi-trash delete-client"></i></a>
      <a href="#"><i class="bi bi-pencil edit-client"></i></a>
      </td>
    </tr>
  </tbody>
</table>
</div>
<?php include "footer.php"; ?>