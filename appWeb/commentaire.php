<?php      
        include ("config/database.php");
        include("includes/layout/header.php");
        include ("includes/layout/navbar.php"); 
        
        ?>

<?php
          // Récupération du billet
    $req = $pdo->prepare("SELECT ID, titre, contenu,date_creation FROM billets WHERE ID = ?");
    $req->execute(array($_GET['billet']));
    $donnees = $req->fetch();
    ?>
        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['titre']); ?>
                <em>le <?php echo $donnees['date_creation']; ?></em>
            </h3>
            <p>
            <?php
                echo nl2br(htmlspecialchars($donnees['contenu']));
                ?>
            </p>
        </div>
    <h2>Commentaires</h2>
<?php
$req->closeCursor(); // Important : on libère le curseur pour la prochaine

// Récupération des commentaires
    $req = $pdo->prepare('SELECT auteur, commentaire, date_commentaire FROM commentaires
    WHERE id_billet = ? ORDER BY date_commentaire');
    $req->execute(array($_GET['billet']));
        
    while ($donnees = $req->fetch())
        {
        ?>
            <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> </p>
            <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
        <?php
        } // Fin de la boucle des commentaires
        $req->closeCursor();
        ?>
        </body>
        </html>

        <?php
        //insertion du commentaire à l'aide d'une requête préparée
			if($_POST){
			$q=$pdo->prepare("INSERT INTO commentaires (id_billet, auteur, commentaire) VALUES (?,?, ?)");
			$q->execute(array($_GET['billet'], $_POST['auteur'], $_POST['commentaire'] ));
            //$monUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			header("Location: commentaire.php");
			}
		?>
			<?php if(isset($_SESSION['ID'])) { ?>
				<section>
            		<div class="container">
                		<form method="post" enctype="multipart/form-data" action=""> 
							<div class="mb-3">
								<label class="form-label">Pseudo</label>
								<input type="text" class="form-control" name="auteur">
							</div>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Commentaire</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire"></textarea>
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-success">Publier</button>
							</div>
						</form>
					</div>
				</section>
            <?php }  else { ?>

				<a href="http://localhost/appWeb/inscription.php" h1 class="display-10" >Si vous n'êtes pas encore membre, veuillez vous inscrire pour publier un commentaire.</h1><br></br>
				<a href="http://localhost/appWeb/login.php" h1 class="display-10" >Si vous n'êtes pas encore connecté, veuillez vous connecter pour publier un commentaire.</h1><br></br>
            <?php } ?>