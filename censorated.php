<?php
$word = $_GET['word'];
$text = $_GET['text'];

$originalTextLength = strlen($text);
$censoredText = str_replace($word, '***', $text);
$censoredTextLength = strlen($censoredText);
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
        <h2>Paragrafo originale</h2>

        <p><?php echo $text; ?></p>
        <div>Lunghezza: <?php echo $originalTextLength; ?> caratteri</div>
    </div>

    <div>
        <h2>Paragrafo censurato</h2>

        <p><?php echo $censoredText; ?></p>
        <div>Lunghezza: <?php echo $censoredTextLength; ?> caratteri</div>
    </div>
</body>
</html>