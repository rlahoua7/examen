<?php
// ini_alter('display_errors', '1');
// ini_set('display_startup_errors','1');
// error_reporting(E_ALL);
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>
        
        <nav>
            <div class="navbar">
                <img src="images/logo.png" class="logo">
                <ul>
                <?php include('navbar.php');?>
                    <li><a href="overons.php">Over ons</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    

                </ul>
            </div>
        </nav>
        <main>
            <div class="main-text">
                <h1>Rijsschool A naar B</h1>
            </div>
        </main>

        <footer>
            <ul class="footer-list">
                <li><a href="contact.php">Contact</a></li>
                <li><a href="overons.php">over ons</i></a></li>
                <li><a href="help.php">hulp</a></li>
            </ul>
            <p>copyright &copy;2023 Rijsschool A naar B. designed by <span>Rayan Lahoua</span></p>
        </footer>
    </body>

    </html>