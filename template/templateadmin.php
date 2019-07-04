<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS-->
    <link href="../yokai/bootstrapAdmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../yokai/bootstrapAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../yokai/bootstrapAdmin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../yokai/bootstrapAdmin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/yokai/public/css/styleadmin.css">

  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../yokai/index.php?action=administration"><img src="/yokai/public/images/yokainew.png" alt="logo yokai" id="logo" /> Panneau d'administration</a>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../yokai/index.php?action=administration">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-sticky-note"></i>
            <span>Apparances</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Apparances</h6>
            <a class="dropdown-item" href="../yokai/index.php?action=listeJeu">Jeux</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../yokai/index.php?action=listeArticle">
            <i class="fas fa-fw fa-home"></i>
            <span>Articles</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../yokai/index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Retourner à l'accueil</span></a>
        </li>
      </ul>
        <!-- /.container-fluid -->
        <?= $content ?>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Site de Yokai</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="../yokai/bootstrapAdmin/vendor/jquery/jquery.min.js"></script>
    <script src="../yokai/bootstrapAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../yokai/bootstrapAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../yokai/bootstrapAdmin/vendor/chart.js/Chart.min.js"></script>
    <script src="../yokai/bootstrapAdmin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../yokai/bootstrapAdmin/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../yokai/bootstrapAdmin/js/sb-admin.min.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

  </body>

</html>
