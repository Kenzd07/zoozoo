
<?php
    session_start();
    $_SESSION["nom"]=$_POST["login"];

    echo "la session est ouverte : <br>";
    echo $_SESSION["nom"]." ";

?>
<html>
<body>

<?php
   @include("connexion.php");

    $a=$_POST["login"];    
    $b=$_POST["mdp"];
    $c=$_POST["fonction"];

    $requete= "SELECT * from personnels where login='$a' and mdp='$b' and fonction='$c'" ;
    $resultat=mysqli_query($conn, $requete);
    $ligne=mysqli_num_rows($resultat);
    if (($ligne==1)&&($c=="directeur"))
        header("location:menudir.html");
    elseif (($ligne==1) && ($c==employe))
        header("location:menuemp.html");
    else
        header("location:userfail.html");
?>
</body>
</html>