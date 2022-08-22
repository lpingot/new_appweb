<?php 
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<HTML lang="fr">
	<HEAD>
		<meta charset="utf-8" />

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
		
		
		<title> Projet WebDev Louis Pingot</title> <!-- Très important pour le référencement. Google fera un lien vers votre page avec ceci. C'est aussi le titre donné quand on met la page dans les favoris. Ne doit pas dépasser 70 caractères (pas une règle absolue, mais Google par exemple coupe les titres trop longs entre 65 et 70 caractères dans les pages de résultat). -->
		<meta name="Description" content="Description du site"/> <!-- Utilisé pour le référencement. Ne pas dépasser 200 caractères. -->
		<meta name="author" content="Louis Pingot" />

		<!-- déclaration des fichiers de scripts -->
		<script type="text/javascript" src="/js/commonscripts.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/alert.js"></script>

	</HEAD>
	<BODY>
