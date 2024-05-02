<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
 
</head>
<body>
    <div>
        <h1>PHP Badwords</h1>
        <form action="censorated.php" method="GET">
            <textarea name="paragraph"  placeholder="Inserisci un testo" required></textarea>
            <div>
                <button type="submit">Invia</button>
                <input name="word" type="text" placeholder="Inserisci la parola che vuoi censurare" required>
            </div>
        </form>
    </div>
</body>
</html>