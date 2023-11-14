<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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

</html>