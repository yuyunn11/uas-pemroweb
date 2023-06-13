<html>
    <head>
        <meta charset = "utf-8">
        <title>Foddies Goodies</title>
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <img class = "icon" rel="icon" href="https://i.imgur.com/OjvEKJT.png">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="main.js">
    </head>
 
    <body>
        <header>
            <img class = "img0" src = "https://i.imgur.com/OjvEKJT.png"> 
        </header>

        <div class="sidenav" id="mySidenav">
            <a class="closebtn" onclick="closeNav()">×</a>
            <a href="About.html"> 🏪 About</a>
            <a href="index.php"> 🛍️ Produk</a>
            <a href="Foodies Goodies.html">📤 Log Out</a>
    
        </div>

        <script src="main.js"></script>

        <div id="main">
            <span onclick="openNav()" style="cursor: pointer; font-size: 30px;">☰</span>
        </div>



        <?php 
        session_start(); 

        echo '<pre>';
        print_r($_SESSION['chart']);
        echo '</pre>';
        
        ?>     
        
        

    
        <footer>
            <h3 class = "h3-f">Foodies<br>Goodies</h3>
        </footer>
    
    </body>
</html>