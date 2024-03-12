<html>
<head>
<title>Liste des animaux</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('connexion.php'); // appel du script de connexion

  // gestion des cas particuliers
  // le champ peut comporter un guillemet qui va gêner MySQL
  $nom=addslashes($_POST["nom"]);
  $date_naissance=addslashes($_POST["date_naissance"]);
  $prenom = addslashes($_POST["prenom"]);
  $sexe = $_POST['sexe'];
  $login = $_POST['login'];
  $mdp = $_POST['mdp'];
  $fonction = $_POST['fonction'];
  $salaire = $_POST['salaire'];

  $requete = "UPDATE personnels SET id_personnel = ".$_POST["id_personnel"].", nom='".$nom."', date_naissance='".$date_naissance."', sexe='".$sexe."', prenom='".$prenom."', login='".$login."', mdp='".$mdp."', fonction='".$fonction."', salaire='".$salaire."' WHERE id_personnel=".$_POST["id_personnel"].";";

 $resultat= mysqli_query($conn, $requete);
 if ( ! $resultat)
 {      echo "<h1>echec de la requête $requete</h1>";
        echo  mysql_error();
 }
 else
     if ( mysqli_affected_rows ($conn ) )
          echo "<h1>mise a jour effectuée</h1>";
 echo '<h3><a href="menudir.php">RETOUR au menu</a></h3>';
mysqli_close($conn);
?>
</body>
</html>