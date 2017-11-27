<?php
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $server = "localhost";
        $username = "ASG";
        $password = "Jaat@2507";
        $conn = new mysqli($server,$username,$password,"ASG");
        if($conn->connect_error){
            die("Internal Server error 404");
        }
        $uname =  $_GET['q'];
        $result = $conn->query("select username from employees where username = '".$uname."'");
        if($result->num_rows > 0){
            echo "true";
        }
        else{
            echo "false";
        }
    }
?>