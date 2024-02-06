<?php
    ob_start();
    $server = "localhost";
    $username = "root";
    $password = "@#dAloy123";
    $database = "ecomercedb";

    $con = new mysqli($server, $username, $password, $database);
    if($con->connect_error){

        echo"<scriptp>console.log( 'Connection to database error!')</script>";
    }else{
        echo"<script> console.log( 'Connection to database successfully!')</script>";
    }
    
?>
