<?php $title = 'Liste des jeux'; ?>
<?php ob_start(); ?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Jeux</a>
            </li>
            <li class="breadcrumb-item active">Liste des jeux</li>
          </ol>

          <div class="row">
          	<div class="col-md-12">
            	<div class="card-header">
              		<i class="fas fa-list"></i>
              			Liste des jeux
            	</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Image</th>
                      <th>Date d'ajout</th>
                      <th>Dernière modification</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listeJeu as $jeu): ?>
                    <tr>
                    	<td><?= $jeu->nom()?></td>
                    	<td><img class="logojeu" src="<?= $jeu->image()?>"></td>
                    	<td><?= $jeu->dateAjout()->format('d/m/Y à H\hi')?></td>
                    	<?php if($jeu->dateAjout() == $jeu->dateModif()): ?>
                    		<td>-</td>
                    	<?php else: ?>
                    		<td><?= $jeu->dateModif()->format('d/m/Y à H\hi') ?></td>
                    	<?php endif ?>
                    	<td><a href="?action=billetEdit&modifier=<?= $jeu->id()?>" class="btn btn-warning">Modifier</a>  <a href="?action=billetListeAdmin&supprimer=<?= $jeu->id()?>" class="btn btn-danger">Supprimer</a></td>
                    </tr>
                	<?php endforeach ?>
                  </tbody>
                </thead>
              </table>
              <a href="/yokai/index.php?action=ajoutJeu" class="btn btn-primary">Ajouter un jeu</a>
            </div>
          </div>
        </div>
			</div>
		</div>
			       
        <!-- /.container-fluid -->
<?php $content = ob_get_clean(); ?>
<?php require('../yokai/template/templateadmin.php'); ?>