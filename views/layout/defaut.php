<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css">
</head>
<body>
    <div class="col-md-12 text-white text-center bg-secondary mb-0" style="height: 5rem;">
        <h1 class="h-25">G8 MVC & POO project</h1>
    </div>
    <!-- <div class="col-md-12 bg-danger mb-0" style="height: 4rem;"> -->
        <div class="col-md-2 float-left ml-0 deleteMarge bg-secondary no-gutters" style="height: 44rem;">
            
            <div id="nav">
                <a href="<?=BASE_URL?>/security/liste" class="btn text-sm"><h5>Liste Etudiant</h5></a>
            </div>

            <div id="nav">
                <a href="<?=BASE_URL?>/security/index"  class="btn"><h5>Ajouter Etudiant</h5></a>
            </div>

            <div id="nav">
                <a href="<?=BASE_URL?>/security/listechambre"  class="btn"><h5>Liste Chambre</h5></a>
            </div>

            <div id="nav">
                <a href="<?=BASE_URL?>/security/addChambre"  class="btn"><h5>Ajouter Chambre</h5></a>
            </div>
            
            
            
        </div>
        <?php echo  $content_for_layout?>
    <!-- </div> -->

    <script src="<?=BASE_URL?>/public/js/ajoutEtudiant.js"></script>
</body>
</html>