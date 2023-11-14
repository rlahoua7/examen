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
                <?php
                session_start();
                if(isset($_SESSION['user_name'])){
                    $gebruikersnaam = $_SESSION["user_name"];
                    echo "<li>Hallo, $gebruikersnaam </li>";
                }
                ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="overons.php">Over ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="../uitloggen/uitloggen.php">uitloggen</a></li>


            </ul>
        </div>
    </nav>
    <main>
        <div class="main-text">
            <h1>Rijsschool A naar B</h1>
        </div>
        <ul class="main-list">
            <div class=list-uren>
                <h3>Uren</h3>
                <p>20</p>
                <p>30</p>
                <p>35</p>
                <p>40</p>
            </div>
            <div class=list-incl-ex>
                <h3>Incl-ex</h3>
                <p>€1.310</p>
                <p>€1.805</p>
                <p>€2.050</p>
                <p>€2.280</p>
            </div>
            <div class=list-incl-ex-TTT>
                <h3>Incl-ex + TTT</h3>
                <p>€1.610</p>
                <p>€2.105</p>
                <p>€2.350</p>
                <p>€2.580</p>
            </div>
            <div class=list-incl-ex-TTT>
                <h3>Incl-ex + TTT</h3>
                <p>€1.610</p>
                <p>€2.105</p>
                <p>€2.350</p>
                <p>€2.580</p>
            </div>
            <div class=list-incl-ex-TTT>
                <h3>Incl-ex + TTT</h3>
                <p>€1.610</p>
                <p>€2.105</p>
                <p>€2.350</p>
                <p>€2.580</p>
            </div>
            <div class=list-incl-ex-TTT>
                <h3>Incl-ex + TTT</h3>
                <p>€1.610</p>
                <p>€2.105</p>
                <p>€2.350</p>
                <p>€2.580</p>
            </div>
        </ul>
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