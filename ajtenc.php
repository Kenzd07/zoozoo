<?php
@include("connexion.php");
echo '<head>
<link rel="stylesheet" href="style.css">
</head>';

$a = $_POST['id_enclos'];
$b = $_POST['nom_enclo'];
$d = $_POST['capacite_max'];
$e = $_POST['taille_enclo'];
$f = $_POST['yes'];
$g = $_POST['responsable'];

$req1 = "INSERT INTO enclos VALUES ('$a','$b','$d','$e','$f','$g')";
$r1 = mysqli_query($conn,$req1);

echo "  <h1> L'enregistrement est effectué avec succès </h1>";

mysqli_close ($conn) ;
?>