
		<?php      
        include ("config/database.php");
        include("includes/layout/header.php");
        include ("includes/layout/navbar.php"); 
        
        //récupérer les 5 derniers billets

        $req=$pdo->query('SELECT ID, titre, contenu, date_creation FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

        //récupérer la recherche
        if($_POST){
            $recherche=$_POST['recherche'];
        }
        $search=$pdo->query('SELECT ID, titre, contenu, date_creation FROM billets 
            WHERE titre LIKE "%$recherche%" OR contenu LIKE "%$recherche%" 
                ORDER BY date_creation DESC LIMIT 0, 5');
        ?>
          
            
        <?php

        /** 
         * Je crée une condition pour afficher les articles en fonction d'une recherche ou non. 
         * Dans le 1er cas où j'ai une recherche , je vais afficher les articles qui correspondent à celle ci. Donc j'appelle ma requête seach
         * Si la variable $_POST est vide, je vais appeler la requete $req et afficher les 5 derniers articles. 
         */
        if($_POST){
            while ($data=$search->fetch()){
                ?>
                    <div class="news">
                        <h3>
                            <?php echo htmlspecialchars($data['titre']); ?>
                            <em>le <?php echo $data['date_creation']; ?></em>
                        </h3>
                        <p>
                            <?php
                                // On affiche le contenu du billet
                                echo nl2br(htmlspecialchars($data['contenu']));
                            ?>
                                <br />
                                <em><a href="http://localhost/appWeb/commentaire.php?billet=<?php echo $donnees['ID']; ?>">Commentaires</a></em>
                        </p>
                    </div>
                <?php
                } // Fin de la boucle des billets

        } else {
        while ($donnees=$req->fetch()){
            ?>
                <div class="news">
                    <h3>
                        <?php echo htmlspecialchars($donnees['titre']); ?>
                        <em>le <?php echo $donnees['date_creation']; ?></em>
                    </h3>
                    <p>
                <?php
                // On affiche le contenu du billet
                echo nl2br(htmlspecialchars($donnees['contenu']));
                ?>
                <br />
                <em><a href="http://localhost/appWeb/commentaire.php?billet=<?php echo $donnees['ID']; ?>">Commentaires</a></em>
                </p>
                </div>
            <?php
            } // Fin de la boucle des billets
        }
            //$req->closeCursor();
        ?>
        
        <html>
            <form method="POST" action=""> 
                Rechercher un mot : <input type="text" name="recherche">
                <input type="SUBMIT" value="Search!"> 
            </form>
        </html>