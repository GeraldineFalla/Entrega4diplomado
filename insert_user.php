<?php
include("connection.php");
$con = connection();


$ID = null;
$Name = $_POST['Name'];
$LastName = $_POST['LastName']; 
$Phone = $_POST['Phone'];
$Password = $_POST['Password'];
$Emailaddress = $_POST['Emailaddress']; 

$sql = "INSERT INTO usersproyecto VALUES ('$ID', '$Name','$LastName','$Phone','$Password','$Emailaddress')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
    exit; // Agrega exit para evitar que se ejecute código adicional
} else {
    echo "Error al insertar usuario: " . mysqli_error($con);
}

?>
