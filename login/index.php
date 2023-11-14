<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<nav>
            <div class="navbar">
                <img src="../images/logo.png" class="logo">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../registreren/index.php">Registreren</a></li>
                    <li><a href="../overons.php">Over ons</a></li>
                    <li><a href="../contact.php">Contact</a></li>

                </ul>
            </div>
        </nav>

<body>
    <div class="container">
        <form action="login.php" method="post">

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="wachtwoord" placeholder="Wachtwoord">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="login" name="submit">
            </div>
            <a href="../wachtwoord_vergeten/wachtwoord-vergeten.php">wachtwoord vergeten?</a>
        </form>
    </div>
</body>

<main>
    <div class="main-text">
        <h1>Rijsschool A naar B</h1>
    </div>
</main>
<footer>
    <ul class="footer-list">
        <li><a href="contact.html">Contact</a></li>
        <li><a href="overons.html">over ons</i></a></li>
        <li><a href="#">hulp</a></li>
    </ul>
    <p>copyright &copy;2023 Rijsschool A naar B. designed by <span>Rayan Lahoua</span></p>
</footer>

</html>