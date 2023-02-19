<?php
$testo = 'Ciao, stampami qui';
$lunghezza_testo = strlen($testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-Badwords</title>
</head>
<body>
    <h2>
        Qui il testo da stampare:
    </h2>
    <p>
        <?php echo $testo ?>
    </p>
    <h2>
        Qui la lunghezza del testo stampato:
    </h2>
    <p>
        <?php echo $lunghezza_testo ?>
    </p>
</body>
</html>