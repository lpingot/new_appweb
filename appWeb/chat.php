
		<?php 
			include ("config/database.php");
			include("includes/layout/header.php");
			include ("includes/layout/navbar.php"); 
			
            //$q = $pdo->prepare("SELECT * FROM minichat ORDER BY date DESC LIMIT 10");
			//récupération des dix derniers messages
			$reponse=$pdo->query("SELECT pseudo, msg FROM chat ORDER BY ID DESC LIMIT 0,10");
			//affichage de chaque message
			while ($donnees=$reponse->fetch()){
				echo '<p class="h6"><strong>' .htmlspecialchars($donnees['pseudo']) .'</strong> : ' .htmlspecialchars($donnees['msg']) .'</p>';
			}
			//$reponse->closeCursor();
			//insertion du message à l'aide d'une requête préparée
			if($_POST){
			$q=$pdo->prepare("INSERT INTO chat (pseudo, msg) VALUES (?,?)");
			$q->execute(array($_POST['pseudo'], $_POST['msg']));
			header("Location: chat.php");
			}
		?>
			<?php if(isset($_SESSION['ID'])) { ?>
				<section>
            		<div class="container">
                		<form method="post" enctype="multipart/form-data" action=""> 
							<div class="mb-3">
								<label class="form-label">Pseudo</label>
								<input type="text" class="form-control" name="pseudo">
							</div>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Message</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-success">Publier</button>
							</div>
						</form>
					</div>
				</section>
            <?php }  else { ?>

				<a href="http://localhost/appWeb/inscription.php" h1 class="display-10" >Si vous n'êtes pas encore membre, veuillez vous inscrire pour accéder au Chat.</h1><br></br>
				<a href="http://localhost/appWeb/login.php" h1 class="display-10" >Si vous n'êtes pas encore connecté, veuillez vous connecter pour accéder au Chat.</h1><br></br>

            <?php } ?>
		<?php 
            include("includes/layout/footer.php");
        ?>