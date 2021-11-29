<?php 
if(!isset($_SESSION)){
    session_start();
}
include_once("DBConnect/connection.php");

$con = connection();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

    $sql = "Select * from empusers where username = '$username' and password = '$password'";
    
    $user = $con->query($sql) or die($con->error);
    $row = $user->fetch_assoc();
    //$query = mysql_query("Select classification from empusers where username = '$username' and password = '$password'",$con);

    $total = $user->num_rows;
    //var_dump($row['classification']);
    //LOGIN (Check database if user is verified) ETO TIGNAN MO MAKIIIIIIIIIIIIIIIIII
    if ($total >0)
    { 
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['Access'] = $row['access'];
        $classficiation = $row['classification'];

          if ($classficiation==0)
          {
            echo header ("Location: HomePage.php");
          } else{
            echo header ("Location: AdminHomePage.php");
          }
    }else{
      $name_error = "*No user found*";
    }
  }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palota: Login</title>
</head>

<link rel ="stylesheet" href="CSS/stylesLogin.css">

<body>
<div id="login-box">
      <div class="left-box">
      
        <h1>Palota Voting</h1>

        <form action="" method="post">
          <input type="text" name="username" id="username" placeholder="Student Number"/>
          <input type="password" name="password" id="password" placeholder="Password"/>
            <?php if (isset($name_error)): ?>
              <span style="color:red"><?php echo $name_error; ?></span>
            <?php endif ?>
          <input type="submit"  name = "login" value="login"/> <br>
          <a href="SignupPage.php"><input type="button" onclick="myFunction()" value="Sign Up"></a>
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