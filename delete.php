<?php
include_once("DBConnect/connection.php");
$con = connection();


//echo $_POST['ID'];

//print_r($_POST);

if(isset($_POST['delete'])){
     $id = $_POST['ID'];
     $sql = "Delete from empusers where id = '$id'";
     $con->query($sql) or die($con->error);

     echo header("Location: AdminHomePage.php");
     
}
?>