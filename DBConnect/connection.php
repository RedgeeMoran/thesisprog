<?php
function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "votingsystem";
    
    $con = new mysqli($servername, $username, $password, $dbname);
    
    if($con->connect_error)
    {
        die("Connection Failed: ". $con->conncet_error);
    }
    else{
        return $con;
    }
} 
?>