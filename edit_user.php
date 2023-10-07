<?php

include("connection.php");
$con = connection();

$ID=$_POST["ID"];
$Name = $_POST['Name'];
$LastName = $_POST['Lastname'];
$Phone= $_POST['Phone'];
$Password = $_POST['Password'];
$Emailaddress = $_POST['Emailaddress'];

$sql="UPDATE usersproyecto SET name='$Name', `Last Name`='$LastName', Phone='$Phone', Password='$Password', `Email address`='$Emailaddress' WHERE id='$ID'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>