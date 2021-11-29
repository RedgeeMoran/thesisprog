<?php
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['UserLogin'])){
    
}
else{
    echo "Welcome Guest";
}
include_once("DBConnect/connection.php");


if(isset($_GET['search'])){

$con = connection();

$search = $_GET['search'];

$sql = "Select * from empusers where username like '%$search%' || password like '%$search%' order by id desc";

$resultrow = $con->query($sql);


$rownumber = $resultrow->fetch_assoc();
        if ($rownumber > 1){
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
                  }
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
    <b><a class="headerText" style="font-size:70px">Palota</a></b>
    <div class ="topnav2nd">    
    <a class="active" href="HomePage.php">Home</a>
        <a href="RunningOfficers.php">Running Officers</a>
        <a href="CurrentOfficers.php">Current Officers</a>
        <a href="Announcements.php">Patch</a>
        <a href="LoginPage.php">Log out</a>
</div>
    </div>
    <div class="homepagetext"style="padding-left:16px">
        <h2 style="font-size:40px"><hr class="new1">Student Database System</h2>
    </div>

<div class="bot">
    <form action="result.php" method="get">
    <input type="text" name="search" size="50" style="font-size:30px">
    <button type="submit">Search</button>
    </form>


    
    <br>
    <a href="add.php">Add New</a>
    <table>
    <thead>
    <tr>
    <th></th>
    <th><h2 style="font-size:20px">Student ID</h2></th>
    <th><h2 style="font-size:20px">Password</h2></th>
    </tr>
    </thead>
    <tbody>
        <?php

                do{

        ?>
    <tr>
    <td><a href="details.php?ID=<?php echo $row['id']; ?>">view</a></td>
    <td>
        <?php
        if ($rownumber > 1){
            echo $row['username'];
        }else{
            echo "No Results Found.";
        }
        ?>
    </td>

    <td>
        <?php
           if ($rownumber > 1){
            echo $row['password'];
        }else{
            echo "No Results Found.";
        }
        ?>
    </td>
    </tr>
        <?php
            }while($rownumber = $resultrow->fetch_assoc());
        ?>

    </tbody>
    </table>
        </div>
</body>
</html>