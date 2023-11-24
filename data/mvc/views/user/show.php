
<!DOCTYPE html>
<html lang="en">
<?php require  "../views/common/head.php" ?>
<body>
<?php require  "../views/common/header.php" ?>
<br>
<br>
<br>

<h1>Detalle del usuario <?php echo $user->id ?></h1>
<ul>
    <li><strong>Nombre: </strong><?php echo $user->name ?></li>
    <li><strong>Apellidos: </strong><?php echo $user->surname ?></li>
    <li><strong>Email: </strong><?php echo $user->email ?></li>
    <li><strong>F. nacimiento: </strong><?php echo $user->birthdate//->format('d-m-Y') ?></li>
    <td>
      <a href="/user" class="btn btn-primary">VOLVER </a>
    </td>
</ul>
<!-- //<?php echo $user->id ?>" -->
</body>
 <?php  require "../views/common/footer.php" ?>

    <?php require "../views/common/scripts.php" ?>
</html>
