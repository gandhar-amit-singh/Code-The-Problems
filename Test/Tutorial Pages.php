<!doctype html>
<head>
    <title>Tutorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link type="text/css" rel="stylesheet" href="../Test/Stylesheet.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/blue-metallic-orbs-icons-alphanumeric/069657-blue-metallic-orb-icon-alphanumeric-letter-c.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body class="bodyC">
    <header class="w3-container w3-padding-48">
        <div class="w3-panel w3-center ">
            <p class="titles tengerine header allerta w3-xlarge w3-wide w3-text-dark-grey">CODE THE <kbd>PROBLEMS</kbd></p>
        </div>
    </header>
    <form class="navbar-form w3-hide-large w3-margin w3-hide-medium" action="https://www.google.com/search" method="get">
        <div class="input-group">
            <input name="q" type="text" class="form-control" placeholder="Search...">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
    </form>
    <section class = "sbar">
        <div class="w3-bar w3-green ">
            <a id = "homen" href="javasctipt:void(0)" class="w3-border w3-border-green w3-hover-white w3-bar-item w3-padding-16 w3-button w3-right w3-hide-medium w3-hide-large" onclick="showMenu()">&#9776;</a>
            <a id = "home" href="#" class="w3-hover-white w3-border w3-border-green w3-bar-item w3-padding-16 tengerine w3-button">Home</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">Data Structures</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">Algorithms</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">Contact</a>
            <a href="#" class="w3-bar-item w3-padding-16 w3-hover-white w3-border w3-border-green tengerine w3-button w3-hide-small">About Us</a>
            <form class="navbar-form navbar-right w3-margin-right w3-hide-small" action="https://www.google.com/search" method="get">
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
        <div id="menus" class="w3-bar-block w3-green w3-hide w3-hide-large w3-hide-medium">
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">Data Structures</a>
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">Algorithms</a>
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">Contact</a>
            <a href="#" class="w3-bar-item w3-border w3-border-green w3-button w3-hover-white tengerine">About Us</a>
        </div>
        <script src="navigation.js"> </script>

    </section>
    <section class="main_content">
        <aside class="w3-left w3-hide-small w3-hide-medium aside_design">
            <div>
                <h3>Introduction</h3>
                <div class="w3-margin-left tengerine">
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                    <h4>what is java</h4>
                </div>
            </div>
        </aside>
        <article class="w3-padding article_content">
            <h1>What is Java</h1><hr>
            <p>
                Figure 2.5 shows how we can solve recurrence (2.2). For convenience, we assume
             that n is an exact power of 2. Part (a) of the figure shows T .n/, which we
             expand in part (b) into an equivalent tree representing the recurrence. The cn term
             is the root (the cost incurred at the top level of recursion), and the two subtrees of
             the root are the two smaller recurrences T .n=2/. Part (c) shows this process carried
             one step further by expanding T .n=2/. The cost incurred at each of the two subnodes
             at the second level of recursion is cn=2. We continue expanding each node
             in the tree by breaking it into its constituent parts as determined by the recurrence,
             until the problem sizes get down to 1, each with a cost of c. Part (d) shows the
             resulting recursion tree.
                Figure 2.5 shows how we can solve recurrence (2.2). For convenience, we assume
             that n is an exact power of 2. Part (a) of the figure shows T .n/, which we
             expand in part (b) into an equivalent tree representing the recurrence. The cn term
             is the root (the cost incurred at the top level of recursion), and the two subtrees of
             the root are the two smaller recurrences T .n=2/. Part (c) shows this process carried
             one step further by expanding T .n=2/. The cost incurred at each of the two subnodes
             at the second level of recursion is cn=2. We continue expanding each node
             in the tree by breaking it into its constituent parts as determined by the recurrence,
             until the problem sizes get down to 1, each with a cost of c. Part (d) shows the
             resulting recursion tree.
                Figure 2.5 shows how we can solve recurrence (2.2). For convenience, we assume
             that n is an exact power of 2. Part (a) of the figure shows T .n/, which we
             expand in part (b) into an equivalent tree representing the recurrence. The cn term
             is the root (the cost incurred at the top level of recursion), and the two subtrees of
             the root are the two smaller recurrences T .n=2/. Part (c) shows this process carried
             one step further by expanding T .n=2/. The cost incurred at each of the two subnodes
             at the second level of recursion is cn=2. We continue expanding each node
             in the tree by breaking it into its constituent parts as determined by the recurrence,
             until the problem sizes get down to 1, each with a cost of c. Part (d) shows the
             resulting recursion tree.
            </p>
        </article>
    </section>
    <footer class="w3-highway-green footer_container" style="margin-top:-2%">
        <div class=" w3-margin w3-center">&copy; Copyright by codetheproblems.com</div>
    </footer>
</body>