<html>
    <div>
    <?php
    @include("s.php");
    ?>
    </div>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $requete="select * from animaux";
        $resultat=mysqli_query($conn, $requete);
        echo mysqli_num_rows($resultat);
        ?>
        <table border=2>
                <tr>
                <td> id_animal : </td>
                <td> id_esp : </td>
                <td> pseudo : </td>
                <td> date naissaance : </td>
                <td> sexe : </td>
                <td> commentaire : </td>
                </tr>
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
            ?><tr>
                <td><?php echo $enreg["id_animal"];?></td>
                <td><?php echo $enreg["id_espece"];?></td>
                <td><?php echo $enreg["pseudo"];?></td>
                <td><?php echo $enreg["date_naissance"];?></td>
                <td><?php echo $enreg["sexe"];?></td>
                <td><?php echo $enreg["commentaire"];?></td>
        </tr> 
                <form method='post' action="supp;php">
                    <td><?php echo "<a href= 'supp.php?id_animal=".$enreg['id_animal']."''>Supprimer</a>";?></td>
                </form>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>
