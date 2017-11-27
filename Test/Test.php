<!doctype html>
<head>
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/blue-metallic-orbs-icons-alphanumeric/069657-blue-metallic-orb-icon-alphanumeric-letter-c.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Stylesheet.css">
</head>
<body style="display:flex;flex-direction:column;">
    <div class="w3-padding w3-center w3-green">
        <h2>PHP Test Cases</h2>
    </div>
    <div style="margin:7% 5% 5% 5%;display:flex;flex-direction:row;">
        <div style="width:30%"  class="w3-card w3-left w3-border w3-margin">
            <div class="w3-green w3-padding w3-center"><h2>Insert into Database</h2></div>
            <form class="w3-container"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <p>
                <label for="name1" class="w3-margin-top">Name</label>
                <input id="name1" name="name" class="w3-input" type="text">        
                <p>
                <label for="username1">Username</label>
                <input id="username1" name="username" class="w3-input" type="text">        
                <p>
                <label for="password1">Password</label>
                <input id="password1" name="password" class="w3-input" type="text">        
                <p>
                <div class="w3-center w3-margin"><button type="submit" class="w3-button w3-border-green w3-border w3-hover-green w3-round">Save</button></div>
            </form>
        </div>    
        <div style="width:60%" class= "w3-card w3-right w3-border w3-margin">
            <div class="w3-green w3-padding w3-center"><h2>Display Database</h2></div>
            <?php
                function display(){
                    $server_name = "localhost";
                    $username = "ASG";
                    $password = "Jaat@2507";
                    $conn = new mysqli($server_name,$username,$password,"ASG");
                    if($conn->connect_error){
                        die("Connection Failed : " . $conn->connect_error);
                    }
                    $sql="select * from employees";
                    $result = $conn->query($sql);
                    if($result->num_rows>0){
                        echo "<table class=\"w3-table-all w3-hoverable w3-margin\" style=\"width:95%;margin:auto; margin-top:4%;\"><tr class=\"w3-green\"><th>Name</th><th>Username</th><th>Pasword</th></tr>";
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>".$row["name"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "Operation Failed : ".$conn->error;    
                    }
                    $conn->close();
                }
                display();
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    $server_name = "localhost";
                    $username = "ASG";
                    $password = "Jaat@2507";
                    $conn = new mysqli($server_name,$username,$password,"ASG");
                    if($conn->connect_error){
                        die("Connection Failed : " . $conn->connect_error);
                    }
                    $stmt = $conn->prepare("insert into employees values(?,?,?)");
                    $stmt->bind_param("sss",$names,$usernames,$passwords);
                    $names = $_POST["name"];
                    $usernames = $_POST["username"];
                    $passwords = $_POST["password"];
                    if(strlen($names)>0 && strlen($usernames)>0 && strlen($passwords)>0){
                        $stmt->execute();
                    }
                    else{
                        echo "<script>alert('Error')</script>";
                    }
                    $stmt->close();
                    $conn->close();
                    display();
                    header("Location:Test.php");    
                }
            ?>
            
        </div>
    </div>
</body>