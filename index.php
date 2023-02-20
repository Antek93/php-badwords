<?php
$testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis quos veniam corrupti officiis, itaque suscipit iusto esse modi adipisci? Quis earum amet quasi similique beatae quos est nisi labore suscipit!';
$lunghezza_testo = strlen($testo);
//Individuare tutte le volte che ipsum viene citato e sostituirlo con ***
$badword = $_GET['badword'];
var_dump($_GET);
$testo_censurato = str_replace($badword, '***', $testo)
//cosa cercare, con cosa sostituirlo, dove
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
    <div>
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
            <?php echo $lunghezza_testo ?> caratteri
        </p>
    </div>
    <div>
        Badword passata come paramentro in GET: <?php echo $badword; ?>
    </div>
    <div>
        <form action="" method="GET">
            <input type="text" name="badword" placeholder="inserisci la parola da censurare" value="<?php echo $badword; ?>">
            <button>
                Censura
            </button>
        </form>
        <div>
            Testo censurato: <?php echo $testo_censurato; ?>
        </div>
    </div>

</body>

</html>