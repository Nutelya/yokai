<?php $title = 'Ajouter un jeu'; ?>
<?php ob_start(); ?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Jeux</a>
            </li>
            <li class="breadcrumb-item active">Ajouter un jeu</li>
          </ol>

          <div class="row">
          	<div class="col-md-12">
			 	<?php
			      if( !empty($message) ) 
			      {
			        echo '<p>',"\n";
			        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
			        echo "\t</p>\n\n";
			      }
			    ?>
			    <!-- Debut du formulaire -->
			   <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?action=ajoutJeu" method="post">
			    <fieldset>
			        <legend>Formulaire</legend>
			          <p>
			          	<label for="nom">Nom du jeu</label>
			          	<input type="text" name="nom" id="nom" required/>
			          	<br>
			            <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
			            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $image->poidMax(); ?>" />
			            <input name="fichier" type="file" id="fichier_a_uploader" />
			            <br>
			            <input type="submit" name="submit" value="Ajouter" />
			          </p>
			      </fieldset>
			    </form>
			</div>
		</div>
			       
        <!-- /.container-fluid -->
<?php $content = ob_get_clean(); ?>
<?php require('../yokai/template/templateadmin.php'); ?>
