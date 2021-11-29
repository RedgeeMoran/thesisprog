<?php



include_once("DBConnect/connection.php");
$con = connection();


    //$sql = "Select * from tblsample1 limit 4 offset 3";
    $sql = "Select * from empusers order by id desc";
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
    <title>Palota: Admin Page</title>
    
</head>
<link rel ="stylesheet" href="CSS/stylesAdmin.css">

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
<br>
<form action="result.php" method="get">
    <input type="text" name="search" size="50" style="font-size:30px">
    <button type="submit">Search</button>
    </form>
<?php if(isset($_SESSION['UserLogin'])) { ?>
<a href = "LoginPage.php">Logout</a>
<?php } ?>

<a href = "add.php">Add New</a>
<table>
<thead>
<tr>
<th></th>
<th><h2 style="font-size:20px">Student ID</h2></th>
<th><h2 style="font-size:20px">Password</h2></th>

</tr>
</thead>
<tbody>
<?php do{ ?>
<tr>
    <td><a href="details.php?ID=<?php echo $row['id']; ?>">view</a></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['password'];?></td>
</tr>
<?php } while($row = $result->fetch_assoc()); ?>
</tbody>
</table>
</div>
</body>
</html>