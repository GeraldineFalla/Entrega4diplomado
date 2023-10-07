<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usersproyecto";
$query = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>usersdata</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="insert_user.php" method="POST">
      <div class="input-group">

       <div class = "input-container">
            <input type ="text" name= "Name" placeholder= "Nombre">
            <i class="fa-solid fa-user"></i>

        <div class = "input-container">
            <input type ="text" name= "LastName" placeholder= "Apellido">
            <i class="fa-solid fa-user"></i>    

        <div class = "input-container">
            <input type ="password" name= "Password" placeholder= "Contraseña">
            <i class="fa-solid fa-lock"></i>

        <div class = "input-container">
            <input type ="email" name= "Emailaddress" placeholder= "Correo electrónico">
            <i class="fa-solid fa-envelope"></i>

        <div class = "input-container">
            <input type ="tel" name= "Phone" placeholder= "Teléfono">
            <i class="fa-solid fa-phone"></i>     
       </div>
       <input name="send" type= "submit" class="btn center-button" value= "Enviar">
      </div>
</form>

<div class= "users-table">
    <h2>Usuarios registrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Contraseña</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                        <th><?= $row['ID']?></th>
                        <th><?= $row['Name']?></th>
                        <th><?= $row['Last Name']?></th>
                        <th><?= $row['Phone']?></th>
                        <th><?= $row['Password']?></th>
                        <th><?= $row['Email address']?></th>
                        <th><a class="users-table--edit" href="update.php?id=<?= $row['ID']?>">editar</a></th>
                        <th><a class="users-table--delete" href="delete_user.php?id=<?= $row['ID'] ?>" >eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
    </table>

</div>


</body>
</html>
