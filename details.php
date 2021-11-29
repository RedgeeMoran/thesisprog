<?php



include_once("DBConnect/connection.php");
$con = connection();

    $id = $_GET['ID'];
    $sql = "Select * from empusers where id = '$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    /*print_r($row);

    do
    {
        echo $row['first_name']. " " .$row['first_name']. "<br>";
    }
    while($row = $result->fetch_assoc());
    */ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palota: Student Details</title>
    
</head>
<link rel ="stylesheet" href="CSS/stylesAdmin2.css">


<body>
<div class="topnav">
<b><a class="headerText" style="font-size:40px">Palota</a></b>
    <div class ="topnav2nd">    
    <a class="active" href="HomePage.php">Home</a>
        <a href="RunningOfficers.php">Running Officers</a>
        <a href="CurrentOfficers.php">Current Officers</a>
        <a href="Announcements.php">Patch</a>
        <a href="LoginPage.php">Log out</a>
</div>
    </div>
    <div class="homepagetext"style="padding-left:16px">
        <h2 style="font-size:70px"><hr class="new1">Student Database System:<br>Edit Details</h2>
    </div>


    <div class = "bot">
    <div class="TextBox">
   
<h1>User Details:</h1>
<br>
<h2>Student Number: <?php echo $row['username'];?></h2>
<h2>Password: <?php echo $row['password'];?></h2>
<a href="AdminHomePage.php">Back</a>
<a href="edit.php?ID=<?php echo $row['id']; ?>">Edit</a>
<form action ="delete.php" method="post">
<button type="submit" name ="delete">Delete User</button>
</form>
    </div>

   

</div>
</body>
</html>