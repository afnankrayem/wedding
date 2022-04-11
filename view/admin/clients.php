<?php 
$pagetitle = "Clients";
include "header.php"; ?>

<?php if(isset($deleted)){
      if($deleted): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> User Deleted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; }?>

<?php if(isset($updated)){
      if($updated): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> User Updated.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; }?>

<?php if(isset($created)){
      if($created): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> User created.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; }?>

<?php if(isset($error)): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> <?php echo $error; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif;?>

<div class="sp-lg"></div>
<div class="sp-lg"></div>
<div class="container-fluid">
  <div class="controls">
    <button class="add" data-toggle="modal" data-target="#add-user"><i class="bi bi-person-plus"></i></button>
  </div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Date d'inscription</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $clients = $users->select('*');
    foreach($clients as $client):
    ?>
    <tr>
      <th scope="row"><?php echo $client['id'];?></th>
      <td><?php echo $client['username'];?></td>
      <td><?php echo $client['phone'];?></td>
      <td><?php echo $client['datetime'];?></td>
      <td class="actions">
      <!-- <a href="?action=show&id=<?php echo $client['id'];?>"><i class="bi bi-eye show-client"></i></a> -->
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $client['id'];?>">
            <button type="submit" name="action" value="delete"><i class="bi bi-trash delete-client"></i></button>
        </form>
      <button class="update" data-toggle="modal" data-target="#update-user"><i class="bi bi-pencil edit-client"></i></button>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade show" id="update-user" tabindex="-1" role="dialog" aria-labelledby="update-user" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">modifier un utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <label for="username" class="col-form-label">Username:</label>
                    <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                    <label for="phone" class="col-form-label">Téléphone:</label>
                    <input type="tel" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                    <label for="password" class="col-form-label">Password:</label>
                    <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                    <label for="role" class="col-form-label">Role:</label>
                    <select name="role" id="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="client" default selected>Client</option>
                    </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <input type="hidden" name="action" value="update">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade show" id="add-user" tabindex="-1" role="dialog" aria-labelledby="add-user" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <label for="username" class="col-form-label">Username:</label>
                    <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                    <label for="phone" class="col-form-label">Téléphone:</label>
                    <input type="tel" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                    <label for="password" class="col-form-label">Password:</label>
                    <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                    <label for="role" class="col-form-label">Role:</label>
                    <select name="role" id="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="client" default selected>Client</option>
                    </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <input type="hidden" name="action" value="create">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>