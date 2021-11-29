<?php
include_once("DBConnect/connection.php");

$con = connection();

$id = $_GET['ID'];
$sql = "Select * from empusers where id = '$id' ";
$result = $con->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['submit'])){
    $usern = $_POST['username'];
    $pass = $_POST['password'];


$sql = "Update empusers set username = '$usern', password = '$pass' where id = '$id'"; 

$con->query($sql) or die($con->error);
echo header("Location:details.php?ID=".$id);
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel ="stylesheet" href="CSS/stylesAdmin.css">

</head>
<body>
<div class="topnav">
<b><a class="headerText" style="font-size:40px">Palota</a></b>
    <div class ="topnav2nd">    
    <a class="active" href="HomePage.php">Home</a>
        <a href="RunningOfficers.php">Running Officers</a>
        <a href="CurrentOfficers.php">Current Officers</a>
        <a href="Announcements.php">Patch</a>
        <a href="index.php">Log out</a>
</div>
    </div>
    <div class="homepagetext"style="padding-left:16px">
        <h2 style="font-size:70px"><hr class="new1">Student Database System:<br>Edit Account</h2>
    </div>


    

    <div class = "bot">
    <div class="TextBox">
   
<h1>Edit Details:</h1>
<br>
<form action="" method="post">
    <label style="font-size:25px"> Student Number </label>
    <input type="text" name="username" style="font-size:25px" value = "<?php echo $row['username'];?>" >
    <label style="font-size:25px"> Password </label>
    <input type="text" name="password" style="font-size:25px" value = "<?php echo $row['password'];?>">
    <input type="submit" name="submit" value="Update">
    </div>
</div>
</form>
</body>
</html>