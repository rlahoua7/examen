<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <p style="background-image: url('images/achtergrond.png');">
    
    <link rel="stylesheet" href="style.css">
</head>

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

<body>
    <form action="afspraak-email.php" method="post">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="number" placeholder="number">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="date" placeholder="date">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" name="text" placeholder="bericht">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="send" name="submit">
        </div>
    </form>
</body>

<footer>
    <ul class="footer-list">
        <li><a href="contact.php">Contact</a></li>
        <li><a href="overons.php">over ons</i></a></li>
        <li><a href="help.php">hulp</a></li>
    </ul>
    <p>copyright &copy;2023 Rijsschool A naar B. designed by <span>Rayan Lahoua</span></p>
</footer>
</html>