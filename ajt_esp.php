<?php
echo "<div>";
@include("s.php");
echo "</div>";
@include("connexion.php");
echo '<head>
<link rel="stylesheet" href="style.css">
</head>';

$a = $_POST['race'];
$b = $_POST['alimentation'];
$d = $_POST['durée_vie'];
$e = $_POST['aquatique'];

$req1 = "INSERT INTO especes VALUES ('','$a','$b','$d','$e')";
$r1 = mysqli_query($conn,$req1);

echo "  <h1> L'enregistrement est effectué avec succès </h1>";
echo "<a href='menu.php'>Retourner au menu</a>";

mysqli_close ($conn) ;
?>