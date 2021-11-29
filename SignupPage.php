<?php
include_once("DBConnect/connection.php");
    $con = connection();
    if(isset($_POST['submit'])){
        $usern = $_POST['username'];
        $pass = $_POST['password'];
    

        $sql_u = "SELECT * FROM empusers WHERE username='$usern'";
        $res_u = mysqli_query($con, $sql_u);
        
        if (mysqli_num_rows($res_u) > 0) {
          $name_error = "*You already have an account registered*";
        }elseif(empty($usern) || empty($pass)){
          $empty_error = "*Please enter a username or password*";
        }
        else{
            //Alt +Z
            $sql = "INSERT INTO `empusers` (`id`, `username`, `password`, `access`) VALUES (NULL, '$usern', '$pass', NULL)";
            $con->query($sql) or die ($con->error);
            echo header('Location:index.php');
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
    
</head>
<link rel ="stylesheet" href="CSS/stylesLogin.css">

<body>




<div id="login-box">
      <div class="left-box">
      
        <h1>Register Account</h1>

        <form action="" method="post">
            <label>Student Number</label>
                <input type="text"name="username">
                
            <label>Password</label>
                <input type="password"name="password">
                
                <?php if (isset($name_error)): ?>
                    <span style="color:red"><?php echo $name_error; ?></span>
                <?php endif ?>

                <?php if (isset($empty_error)): ?>
                    <span style="color:red"><?php echo $empty_error; ?></span>
                <?php endif ?>
                
            <input type="submit" name="submit" value="Register">
        </form>

         
        </div>
        <div style="background-image: url('Pictures/sbca.png');" class="right-box">
        
        </div>
        
        



<div class="bot">
  <img src="Pictures/beda.png" width=70px; height=85px;>
</div>


<script>
function myFunction() {
  document.getElementById("paymentcenter").reset();
}

window.onscroll = function() {myFunction2()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction2() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>