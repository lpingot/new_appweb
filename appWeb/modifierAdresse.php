<?php
        
        include ("config/tools.php");
        checkUserCanAccess();

            include ("config/database.php");

            include("includes/layout/header.php");
			include ("includes/layout/navbar.php");

            // if ($_POST){ 
                        
            //     $q = $pdo->prepare("UPDATE user SET adresse = ':new_adress' WHERE ID= :ID");
            //     $q->execute(["ID" => $_SESSION['ID'], "new_adress" => $_POST['adresse']]);
            //     //$result = $q->fetch(PDO::FETCH_ASSOC); 
            // }  
            
            if ($_POST){ 
                        
                $q = $pdo->prepare("UPDATE user SET adresse= :new_adress WHERE ID= :ID");
                $q->execute(array("adresse"=> $_POST['adresse'], "ID"=>$_SESSION['ID']));
               
            }  

            
            
            ?>

        <section>
            <div class="container">
                <form method="POST" enctype="multipart/form-data" action="">      <!-- ligne obligatoire pour retrouver les données dans mon fichier -->
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adresse" >
                    </div>
                    
                    <a href="http://localhost/appWeb/profil.php" button type="submit" class="btn btn-primary" >Valider</button>
                </form>
            </div>
        </section>
        
		</div> <!-- div bloc_page -->
        <?php 
            include("includes/layout/footer.php");
           
            ?>


