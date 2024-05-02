<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
 
</head>
<body>
    <div>
    <form action="censored.php" method="GET">
        <div>
            <label for="censored-word">Parola da censurare</label>
            <input id="censored-word" name="word" type="text" />
        </div>

        <div>
            <label for="censored-text">Testo</label>
            <textarea id="censored-text" name="text" rows="10" cols="50"></textarea>
        </div>

        <div>
            <button type="submit">Invia</button>
        </div>
    </form>

    </div>
</body>
</html>