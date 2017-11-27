<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $server = "localhost";
        $database = "ASG";
        $conn = new mysqli($server,"ASG","Jaat@2507",$database);
        if($conn->connect_error){
            die("Internal Server error 404");
        }
        $stmt = $conn->prepare("insert into employees values(?,?,?,?)");
        $stmt->bind_param("ssss",$fname,$lname,$username,$password);
        $fname = $_POST['first-name'];
        $lname = $_POST['last-name'];
        $username = $_POST['username2'];
        $password = $_POST['cpswd2'];
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "<script>alert('Welcome to codetheproblems.com');window.location=\"../index.php\";</script>";
       
    }
?>