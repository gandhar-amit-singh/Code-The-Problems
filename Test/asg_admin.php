<!doctype html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link type="text/css" rel="stylesheet" href="../Test/Stylesheet.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/blue-metallic-orbs-icons-alphanumeric/069657-blue-metallic-orb-icon-alphanumeric-letter-c.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="padding-top:8%;display:flex;flex-direction:column;align-items:center;">
    <div style="width:35%;z-index:50;"  class="w3-card w3-left w3-border">
        <div class="w3-green w3-padding w3-center"><h2>CODE THE <kbd>PROBLEMS</kbd></h2></div>
        <form class="w3-container"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>
            <br><br><br>
            <label for="username1">Username</label>
            <input id="username1" name="username" class="w3-input" type="text">        
            <p>
            <br><br>
            <label for="password1">Password</label>
            <input id="password1" name="password" class="w3-input" type="text">        
            <p>
            <br><br>
            <div class="w3-center w3-margin"><button type="submit" class="w3-button w3-border-green w3-border w3-hover-green w3-round">Welcome Sir</button></div><br>
        </form>
    </div>    
</body>