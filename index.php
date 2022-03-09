<?php
    
    $parola = $_GET['parola'];

    $frase = 'Questo è il mio '. $parola .' lavoro';

    $numeri = strlen($frase);

    $modifica = str_replace( $parola ,'***', $frase);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
        <?php echo $frase ?>
    </h1>
    <h1>
        La mia frase ha : <?php echo $numeri ?> caratteri
    </h1>
    <h1>
        <?php echo $modifica ?>
    </h1>
    
</body>
</html>