
		<?php
        
            include ("config/database.php");


            include("includes/layout/header.php");
			include ("includes/layout/navbar.php"); 
            
            
// On teste la connexion si des valeurs sont passées en POST
if($_POST && isset($_POST['lmail']) && isset($_POST['mdp'])){
    $q = $pdo->prepare("SELECT * FROM user WHERE mail = :mail AND mdp = :mdp");
    $q->execute(["mail" => $_POST['lmail'], "mdp" => $_POST['mdp']]);
    $result = $q->fetch(); // 

    if ($result != false){
        $_SESSION['ID'] = $result['ID'];
        $_SESSION['mail'] = $result['mail'];
    }
    
}

// On redirige l'utilisateur s'il est connecté
if (isset($_SESSION['ID'])){
    header('Location: index.php');
}


		?>

		<div id="bloc_page">

            <section>
                <div class="container">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" name="lmail">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
                        </div>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>
			</section>
            
		</div> <!-- div bloc_page -->
        <?php 
            include("includes/layout/footer.php");
        ?>