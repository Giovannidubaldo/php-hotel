<!-- LOGICA DI LAVORO -->
<?php
    include __DIR__."/partials/vars.php";

    // Filtraggio per voto

    if(isset($_GET['voto'])){
        $filter_hotel = [];
        foreach($hotels as $hotel){
            if($hotel['vote'] >= $_GET['voto']){
                $filter_hotel[] = $hotel;
            }
        }
    }
    else{
        $filter_hotel = $hotels;
    }
?>

<!-- LOGICA DI VISUALIZZAZIONE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Php Hotel</title>
</head>
<body>

    <!-- HEADER -->
    <?php include "./partials/templates/header.php"; ?>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="row">
                <h3 class="text-center my-4">Filtra gli hotel!</h3>

                <!-- Filtraggio per voto -->
                <form action="./index.php" class="my-3">
                    <div class="row">
                        <div class="col-4">
                            <input type="text" id="voto" name="voto" class="form-control form-control-sm" placeholder="Filtra per voto...">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-sm btn-primary">Filtra</button>
                        </div>
                    </div>
                </form>

                <!-- Tabella -->
                <div class="col-12">
                    <table class="table table-striped table-primary">
                        <thead>
                            <th>Nome</th>
                            <th>Descrizione</th>
                            <th>Parcheggio</th>
                            <th>Voto</th>
                            <th>Distanza dal centro</th>
                        </thead>
                        <tbody>
                            <?php foreach($filter_hotel as $hotel) { ?>
                                <tr>
                                    <td> <?php echo $hotel['name'] ?></td>
                                    <td> <?php echo $hotel['description'] ?></td>
                                    <td> <?php echo $hotel['parking'] == true ? 'Si' : 'No' ?></td>
                                    <td> <?php echo $hotel['vote'] ?></td>
                                    <td> <?php echo $hotel['distance_to_center'].' km' ?></td>
                                </tr>
                            <?php } ?>
                            <?php if($filter_hotel == []){ ?>
                                <tr>
                                    <td colspan="5"> <?php echo "Nessun risultato trovato" ; ?> </td>
                                </tr>
                                <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?php include "./partials/templates/footer.php"; ?>

</body>
</html>