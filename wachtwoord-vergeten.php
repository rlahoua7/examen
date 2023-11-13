<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>wachtwoord vergeten</h1>

    <form method="post" action="wachtwoord-reset.php">

        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <button>send</button>
    </form>
</body>
</html>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>Maak je afspraken</h3>
            <input type="text" id="name" placeholder="Je naam" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="telefoon" placeholder="telefoon" required>
            <textarea id="message" rows="4" placeholder=""></textarea>
            <button type="submit">send</button>
        </form>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
            Host : "smtp.gmail.com",
            Username : "rlahoua2004@gmail.com",
            Password : "Element115",
            To : 'rijschoolanaarb@outlook.com',
            From : document.getElementById("email").value,
            Subject : "",
            Body : "And this is the body"
        }).then(
        message => alert(message)
        );
        }
    </script>
</body>
</html> -->