<html>
<head>
<title>Liste des animaux</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('connexion.php'); // appel du script de connexion

  // gestion des cas particuliers
  // le champ peut comporter un guillemet qui va gêner MySQL
  $pseudo=addslashes($_POST["pseudo"]);
  $date_naissance=addslashes($_POST["date_naissance"]);
  $commentaire = addslashes($_POST["commentaire"]);
  $sexe = $_POST['sexe'];
  $id_espece = $_POST['id_espece'];
  $date_naissance = $_POST['date_naissance'];

  $requete = "UPDATE animaux SET id_animal = ".$_POST["id_animal"].", id_espece='".$id_espece."', date_naissance='".$date_naissance."', sexe='".$sexe."', pseudo='".$pseudo."', commentaire='".$commentaire."' WHERE id_animal=".$_POST["id_animal"].";";

 $resultat= mysqli_query($conn, $requete);
 if ( ! $resultat)
 {      echo "<h1>echec de la requête $requete</h1>";
        echo  mysql_error();
 }
 else
     if ( mysqli_affected_rows ($conn ) )
          echo "<h1>mise a jour effectuée</h1>";
 echo '<h3><a href="menu.php">RETOUR au menu</a></h3>';
mysqli_close($conn);
?>
</body>
</html>