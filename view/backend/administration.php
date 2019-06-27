<?php $title = 'Accueil Administration'; ?>
<?php ob_start(); ?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Tableau de bord</a>
            </li>
            <li class="breadcrumb-item active">Vue globale</li>
          </ol>

        
        <!-- /.container-fluid -->
<?php $content = ob_get_clean(); ?>
<?php require('../yokai/template/templateadmin.php'); ?>
