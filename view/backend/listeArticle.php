<?php $title = 'Liste des Articles'; ?>
<?php ob_start(); ?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Articles</a>
            </li>
            <li class="breadcrumb-item active">Liste des articles</li>
          </ol>

          <div class="row">
          	<div class="col-md-12">
            	<div class="card-header">
              		<i class="fas fa-list"></i>
              			Liste des Articles
            	</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Auteur</th>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Etiquette</th>
                      <th>Date d'ajout</th>
                      <th>Dernière modification</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listeArticle as $article): ?>
                    <tr>
                    	<td><?= $article->auteur()?></td>
                      <td><?= $article->titre()?></td>
                      <td><?= $article->contenu()?></td>
                      <td><?= $article->etiquette()?></td>
                    	<td><?= $article->dateAjout()->format('d/m/Y à H\hi')?></td>
                    	<?php if($article->dateAjout() == $article->dateModif()): ?>
                    		<td>-</td>
                    	<?php else: ?>
                    		<td><?= $article->dateModif()->format('d/m/Y à H\hi') ?></td>
                    	<?php endif ?>
                    	<td><a href="?action=billetEdit&modifier=<?= $article->id()?>" class="btn btn-warning">Modifier</a>  <a href="?action=listeArticle&supprimer=<?= $article->id()?>" class="btn btn-danger">Supprimer</a></td>
                    </tr>
                	<?php endforeach ?>
                  </tbody>
                </thead>
              </table>
              <a href="/yokai/index.php?action=ajoutJeu" class="btn btn-primary">Ajouter un article</a>
            </div>
          </div>
        </div>
			</div>
		</div>
			       
        <!-- /.container-fluid -->
<?php $content = ob_get_clean(); ?>
<?php require('../yokai/template/templateadmin.php'); ?>