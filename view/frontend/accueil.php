<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yokai</title>

    <link rel="stylesheet" href="/yokai/bootstrap/css/bootstraptest.css">
    <link rel="stylesheet" href="/yokai/public/css/style.css">

  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12" id="slider">
            <div id="diaporama" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#diaporama" data-slide-to="0" class="active"></li>
                <li data-target="#diaporama" data-slide-to="1"></li>
                <li data-target="#diaporama" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" >
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/yokai/public/images/slider1.png" alt="Arbre" class="sliderimg">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/yokai/public/images/slider2.png" alt="Arbres" class="sliderimg">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/yokai/public/images/slider3.png" alt="Arbress" class="sliderimg">
                </div>
              </div>
              <a href="#diaporama" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="sr-only">Précédent</span>
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <a href="#diaporama" class="carousel-control-next" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
        <nav class="row">
                <a href="/yokai/index.php" class="col-md-1 offset-md-2" ><img src="/yokai/public/images/yokainew.png" class="img-fluid" alt="logo yokai" id="logo" /></a>
                <a href="#" class="col-md-1 textlien">Actualités</a>
                <a href="#" class="col-md-1 textlien">Jeux</a>
                <a href="#" class="col-md-1 offset-md-4 textlien">Contact</a>
                <a href="/yokai/index.php?action=administration" class="col-md-2 textlien">Mon compte</a>
          </nav>
      </div>
      <div class="row item1">
        <div class="col-md-12" id="backgrounditem1" class="item1">
          <div class="row item1">
            <div class="col-md-1">
            </div>
            <?php foreach($listeJeu as $jeu): ?>
            <div class="col-md-2 blocjeu offset-md-1">
              <img src="<?= $jeu->image() ?>" alt="<?= $jeu->nom() ?>" class="jeu"/>
            </div>
            <?php endforeach ?>
          </div>
          <img src="/yokai/public/images/fondecran.png" class="backgroundimg" alt="bdo background"/>
        </div>
      </div>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/yokai/public/js/slider.js"></script>
  </body>
</html>
