
<?php
@include("connexion.php");
echo '<head>
<link rel="stylesheet" href="style.css">
</head>';

$a = $_POST['date_naissance'];
$b = $_POST['sexe'];
$d = $_POST['pseudo'];
$e = $_POST['commentaire'];
$f = $_POST['id_esp'];

$req1 = "INSERT INTO animaux VALUES ('','$f','$a','$b','$d','$e')";
$r1 = mysqli_query($conn,$req1);

echo "  <h1> L'enregistrement est effectué avec succès </h1>";
echo "<a href='menu.php'>Retourner au menu</a>";

mysqli_close ($conn) ;
?>