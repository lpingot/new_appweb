<?php
        
        include ("config/tools.php");
        checkUserCanAccess();

            include ("config/database.php");

            include("includes/layout/header.php");
			      include ("includes/layout/navbar.php");


            $q = $pdo->prepare("SELECT * FROM user WHERE ID = :ID");
            $q->execute(["ID" => $_SESSION['ID']]);
            $result = $q->fetch(PDO::FETCH_ASSOC); 

            

            
            /**$q = $pdo->prepare("UPDATE user SET adresse=':new_adress' WHERE ID = :ID");
            $q->execute(["ID" => $_SESSION['ID'], "new_adress" => $_POST['nom_de_linput_dans_le_form']]);
            $result = $q->fetch(PDO::FETCH_ASSOC); **/


?>

<table class="table">
  <tbody>
    <tr>
      <th scope="row">PSEUDO</th>
      <td colspan="2"><?php echo $result['pseudo']; ?></td>
    </tr>
    <tr>
      <th scope="row">NOM</th>
      <td colspan="2"><?php echo $result['nom']; ?></td>
    </tr>
    <tr>
      <th scope="row">PRENOM</th>
      <td colspan="2"><?php echo $result['prenom']; ?></td>
    </tr>
    <tr>
      <th scope="row">ADRESSE</th>
      <td><?php echo $result['adresse'];?></td>
      <td> <a href="http://localhost/appWeb/modifierAdresse.php">Modifier</td>
    </tr>
    <tr>
      <th scope="row">CODE POSTAL</th>
      <td><?php echo $result['postCode']; ?></td>
      <td>Modifier</td>
    </tr>
    <tr>
      <th scope="row">DATE DE NAISSANCE</th>
      <td colspan="2"><?php echo $result['birth']; ?></td>
    </tr>
    <tr>
      <th scope="row">EMAIL</th>
      <td><?php echo $result['mail']; ?></td>
      <td>Modifier</td>
    </tr>
    <tr>
      <td colspan="3">Modifier mot de passe</td>
    </tr>
  </tbody>
</table>
