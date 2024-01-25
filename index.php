<!-- LOGICA DI LAVORO -->
<?php
    include __DIR__."/partials/vars.php";
?>

<!-- LOGICA DI VISUALIZZAZIONE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Php Hotel</title>
</head>
<body>

    <!-- HEADER -->
    <?php include "./partials/templates/header.php"; ?>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="row">
                <?php foreach($hotels as $hotel) { ?>
                    <div class="col-12 my-2">
                        <?php echo $hotel['name']; ?>
                        <ul>
                            <li>
                                <?php echo 'Descrizione : '.$hotel['description']; ?>
                            </li>
                            <li>
                                <?php echo 'Parcheggio : '.$hotel['parking'] == true ? 'Si' : 'No'; ?>
                            </li>
                            <li>
                                <?php echo 'Voto : '.$hotel['vote']; ?>
                            </li>
                            <li>
                                <?php echo 'Distanza dal centro : '.$hotel['distance_to_center'].' km'; ?>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?php include "./partials/templates/footer.php"; ?>
</body>
</html>