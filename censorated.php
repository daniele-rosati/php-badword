<?php
$paragraph = $_GET['paragraph'];
$censoredWord = $_GET['word'];
$paragraphFirstUppercase = ucfirst($paragraph);
$paragraphLength = strlen($paragraph);
$paragraphCensored = str_replace($censoredWord, '***', $paragraph);
$paragraphCensoredUpper = ucfirst($paragraphCensored);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bardwords</title>
    
</head>
<body>
    <div>
        <h1>PHP Badwords</h1>
        <h2>Paragrafo</h2>
        <div>
            <p><?php echo $paragraphFirstUppercase; ?></p>
            <p>Lunghezza paragrafo: <?php echo $paragraphLength; ?> caratteri</p>
        </div>
        <h2>Paragrafo Censurato</h2>
        </div>
            <p><?php echo $paragraphCensoredUpper; ?></p>
        </div>
    </div>
</body>
</html>