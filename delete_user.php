<?php

include("connection.php");
$con = connection();

$ID=$_GET["id"];

$sql="DELETE FROM usersproyecto WHERE id='$ID'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>