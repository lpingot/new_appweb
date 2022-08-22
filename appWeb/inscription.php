		<?php 
            include("includes/layout/header.php");
			include ("includes/layout/navbar.php"); 
            include ("config/database.php");

            if ($_POST){
                $sql ="INSERT INTO user (mail, mdp) VALUES(?,?)";
                $a = $pdo->prepare($sql)->execute([$_POST['mail'], $_POST['mdp']]);
            }
           

            
		?>

        <section>
            <div class="container">
                <form method="post" enctype="multipart/form-data" action="">      <!-- ligne obligatoire pour retrouver les données dans mon fichier -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
                    <!-- <input type="hidden" name="idProduit" value="<?php echo $produit['id']; ?>" /> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adresse">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Code postal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="postCode">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pseudo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mail">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">Introduisez ce même mot de passe une deuxième fois.</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Je confirme avoir lu les conditions</label>
                </div>
                <button type="submit" class="btn btn-primary" a href="http://localhost/appWeb/bienvenue.php">Valider</button>
                </form>
            </div>
        </section>
        
		</div> <!-- div bloc_page -->
        <?php 
            include("includes/layout/footer.php");
        ?>