<?php
include("connection.php");
$con = connection();


$ID = $_GET['id'];

$sql = "SELECT * FROM usersproyecto WHERE ID = '$ID'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Editar usuario</title>
</head>
<body>
<div class="users-form">
            <h1>Editar Usuario</h1>
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="ID" value="<?= $row['ID'] ?>">
                <input type="text" name="Name" placeholder="Nombre" value="<?= $row['Name'] ?>">
                <input type="text" name="Lastname" placeholder="Apellido" value="<?= $row['Last Name'] ?>">
                <input type="text" name="Phone" placeholder="Teléfono" value="<?= $row['Phone'] ?>">
                <input type="password" name="Password" placeholder="Contraseña" value="<?= $row['Password'] ?>">
                <input type="email" name="Emailaddress" placeholder="Email" value="<?= $row['Email address'] ?>">

                <input type="submit" value="Editar">
            </form>

        </div>
</body>
</html>