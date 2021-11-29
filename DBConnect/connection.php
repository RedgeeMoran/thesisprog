<?php
function connection(){
    $servername = "sql6.freemysqlhosting.net";
    $username = "sql6454988";
    $password = "bUQHPAfLyG";
    $dbname = "sql6454988";
    
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