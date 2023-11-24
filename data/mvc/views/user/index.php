<!doctype html>
<html lang="en">
  
<?php require  "../views/common/head.php" ?>
  <body>

   <?php require  "../views/common/header.php" ?>
  

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Listado general de la App</h1>
      <h1>Lista de usuarios</h1>
<table class="table table-striped table-hover">
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>F. nacimiento</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>

  <?php foreach ($users as $key => $user) { ?>
    <tr>
    <td><?php echo $user->name ?></td>
    <td><?php echo $user->surname ?></td>
    <td><?php echo $user->email ?></td>
    <td><?php echo $user->birthdate//->format('d-m-Y') ?></td>
    <td>
      <a href="/user/show/<?php echo $user->id ?>" class="btn btn-primary">Ver </a>
    </td>
    <td>
      <a href="/user/edit/<?php echo $user->id ?>" class="btn btn-primary">Editar</a>
    </td>
    <td>
      <a href="/user/delete/<?php echo $user->id ?>" class="btn btn-primary">Borrar</a>
    </td>
    </tr>
  <?php } ?>
</table>
    </main>
    <td>
      <a href="/user/create/" class="btn btn-primary">Crear nuevo usuario</a>
    </td>
    <?php  require "../views/common/footer.php" ?>

    <?php require "../views/common/scripts.php" ?>
  </body>