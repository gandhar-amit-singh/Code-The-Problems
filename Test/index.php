<!doctype html>
<head>
    <title>Code The Problems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link type="text/css" rel="stylesheet" href="../Test/Stylesheet.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/blue-metallic-orbs-icons-alphanumeric/069657-blue-metallic-orb-icon-alphanumeric-letter-c.png">
    <script type="text/javascript" src="../Test/navigation.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
    <!-- Login Menus -->
    
    <div class="w3-row w3-margin-top">
        <div class="w3-right">
            <img class="w3-circle w3-border-green w3-border" style="cursor:pointer;" src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" width="40px" height="40px" />
            <a onclick="document.getElementById('login').style.display='block'" class="w3-margin w3-text-black">Login</a>
        </div>
    </div>
    
    <!-- Login panel -->
    
    <div id="login" class="w3-modal w3-round">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round" style="width:30%;">
            <div class="w3-container">
                <div class="w3-center">
                    <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <img class="w3-image w3-padding-16 w3-circle w3-margin" src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" width="100px" height="100px"/>
                </div>
                <form class="w3-container"  method="post" action="./test.php">
                    <p>
                    <label for="username1">Username</label>
                    <input id="username1" name="username" class="w3-input" type="text" required>        
                    <p>
                    <label for="password1">Password</label>
                    <input id="password1" name="password" class="w3-input" type="password" required>        
                    <p>
                    <div class="w3-center w3-margin">
                        <button style = "width:40%" type="submit" class="w3-margin w3-button w3-border-green w3-border w3-hover-green w3-round">Login</button>
                    </div>
                    <input class="w3-check" type="checkbox" id="remember"><label for="remember">&nbsp;&nbsp;Remember me</label>
                    <div class="w3-margin" style="display:flex;float:right;flex-direction:column">
                        <a onclick="document.getElementById('login').style.display='none';document.getElementById('signup').style.display='block'" class="w3-right">Not a member?</a>
                        <a class="w3-right">Forgot Password</a>    
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- sign up panel -->
    
    <div id="signup" class="w3-modal w3-round">
        <div class="w3-modal-content w3-round w3-card-4 w3-animate-zoom w3-round" style="width:30%;">
            <div class="w3-container">
                <div class="w3-center">
                    <span onclick="document.getElementById('signup').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <div class="w3-center w3-text-green w3-padding w3-margin w3-xxlarge">Sign up</div>
                </div>
                <form class="w3-container"  method="post" action="./_backEnd/register.php" onsubmit="return validate()">
                    <p>
                    <div class="w3-row-padding w3-padding">
                        <div class="w3-half">
                            <input placeholder="First Name" id="first-name1" name="first-name" class="w3-input" type="text" required>        
                        </div>
                        <div class="w3-half">
                            <input placeholder="Last Name"  id="last-name1" name="last-name" class="w3-input" type="text" required>        
                        </div>
                    </div>
                    <div>
                        <div class="w3-row-padding w3-margin">
                            <input  placeholder="Username" id="username2"  name="username2" class="w3-input" type="text" required>
                        </div>
                        <div class="w3-row-padding w3-margin">
                            <input placeholder="Password" onkeypress="check()2" id="pswd2" name="pswd2" class="w3-input" type="password" required>
                        </div>
                        <div class="w3-row-padding w3-margin">
                            <input placeholder="Confirm Password" onkeypress="check3()" id="cpswd2" name="cpswd2" class="w3-input" type="password" required>        
                        </div>
                    </div>
                    <div class="w3-center w3-padding w3-margin">
                        <button style = "width:40%" type="submit" class="w3-margin w3-button w3-border-green w3-border w3-hover-green w3-round">Register Me</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!--Modal window quit script-->
    
    <script> 
        
        // For modal dismission process
        
        var modal1 = document.getElementById('login'), modal2 = document.getElementById('signup');
        window.onclick = function(event){
            if(event.target==modal1){
                modal1.style.display = "none";
            }
            else if(event.target==modal2){
                modal2.style.display = "none";
            }
        }
    
        <!-- Login Procedures -->
            
        function validate(){
            if(flag&flag2){
                return true;
            }
            return false;
        }
        
    </script>
    
    <!-- Main title Header -->
    
    <header class="w3-container w3-padding-32">
        <div class="w3-panel w3-center ">
            <p class="titles tengerine header allerta w3-xlarge w3-wide w3-text-dark-grey">CODE THE <kbd>PROBLEMS</kbd></p>
        </div>
    </header>
    
    <!-- Navigation Bar Menu -->
    
        <!-- Flexible Search Box -->
    
    <div class="formUp">
        <form class="w3-bar w3-center" action="https://www.google.com/search" method="get">
            <div class="input-group">
                <input name="q" type="text" class="form-control" placeholder="Search...">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    
        <!-- Nav-bar menus -->
    
    <section>
        <div class="w3-bar w3-green">
            <a id = "homen" href="javasctipt:void(0)" class="w3-border w3-border-green w3-hover-white w3-bar-item w3-padding-16 w3-button w3-right w3-hide-medium w3-hide-large" onclick="showMenu()">&#9776;</a>
            <a id = "home" href="#" class="w3-hover-white w3-border w3-border-green w3-bar-item w3-padding-16 tengerine w3-button">Home</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">Data Structures</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">Algorithms</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">Contact</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">About Us</a>
            <form class="navbar-form nav_menus navbar-right w3-margin-right w3-hide-small" action="https://www.google.com/search" method="get">
                <div class="input-group">
                    <input name="q" type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                </div>
            </form>
        </div>
        
            <!-- For small screens --> 
        
        <div id="menus" class="w3-bar-block w3-green w3-hide w3-hide-large w3-hide-medium">
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">Data Structures</a>
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">Algorithms</a>
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">Contact</a>
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">About Us</a>
        </div>

    </section>
    
    <section class="w3-panel w3-border-green w3-padding" style="margin:4% 1% 1% 1%;border-left:4px solid green; max-width: 75%;">
        <p class="w3-medium">Code The Problem is a platform to the students who seek a better knowledge of computer domain subjects. Code The Problem mainly focuses upon the clearity of material and relate the theortical logics to the real world problems</p>
    </section>
    <section name="recent_tutorials" class="w3-border w3-border-green recentTutorial" >
        <div class="w3-panel w3-border-green w3-xlarge tengerine"><div class="w3-border-bottom w3-border-sand " style="text-shadow:1px 1px 0 #444 ;display:inline-block">Recent Tutorials</div></div>
        <div class="w3-padding flexContainer">
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="DataStructures.jpg" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Data Structures</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtdH2TvyMCaT2zioRyIkRmxxsGpCIjokaFryNd03hBe1SprO-1" width="70px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Algorithms</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="https://png.icons8.com/c-programming/color/1600" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">C </div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="http://acsferozepur.com/wp-content/uploads/2017/09/c-plus-plus.png" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">C++</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScJn41H5O5cFKXD7whgrYFFRoJvjKSBHW5pYQYZLX9M680r4Pw" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">DBMS</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/2000px-Python.svg.png" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Python</div>
            </a>
        </div>
    </section>
    <section name="language_tutorials"  class="w3-border w3-border-green recentTutorial">
        <div class="w3-panel w3-border-green w3-xlarge tengerine"><div class="w3-border-bottom w3-border-sand w3-text-dark-grey" style="text-shadow:1px 1px 0 #444 ;display:inline-block">Languages' Tutorials</div></div>
        <div class="w3-padding flexContainer">
            <?php
                include 'Entities.php';
                for($x=1;$x<=7;$x++){
                    new MenuPanel("Datastructure ".$x,"DataStructures.jpg","#");
                }
            ?>
        </div>
    </section>
    <section name="cse_domain_tutorials"  class="w3-border w3-border-green recentTutorial">
        <div class="w3-panel w3-border-green w3-xlarge tengerine"><div class="w3-border-bottom w3-border-sand w3-text-dark-grey" style="text-shadow:1px 1px 0 #444 ;display:inline-block">CSE Domain Tutorials</div></div>
        <div class="w3-padding flexContainer">
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="DataStructures.jpg" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Data Structures</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="DataStructures.jpg" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Data Structures</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="DataStructures.jpg" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Data Structures</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="DataStructures.jpg" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Data Structures</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="DataStructures.jpg" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Data Structures</div>
            </a>
            <a href="#" class="wrapper w3-white w3-card w3-hover-green  w3-margin">
                <img class="w3-left w3-image w3-circle" src="DataStructures.jpg" width="80px" height="80px"/>
                <div class="w3-right " style="margin-top: 5%;">Data Structures</div>
            </a>
        </div>
    </section>
    <section class="w3-highway-green footer_container">
        <div class="w3-margin w3-center">&copy; Copyright By CODE-THE-PROBLEM</div>
    </section>
</body>