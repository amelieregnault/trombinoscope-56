<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faille XSS</title>
</head>

<body>
    <form action="faillexss.php" method="post">
        <input type="text" name="comment">
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>