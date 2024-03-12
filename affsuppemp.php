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
        $requete="select * from personnels";
        $resultat=mysqli_query($conn,$requete);
        echo "nombre de personnels :";
        echo mysqli_num_rows($resultat);
        ?> 
        <table border=2>
            <tr>
                <td> id_personnel : </td>
                <td> nom : </td>
                <td> prenom : </td>
                <td> date naissaance : </td>
                <td> sexe : </td>
                <td> login : </td>
                <td> mdp </td>
                <td> fonction </td>
                <td> salaire </td>
            </tr>
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
            ?><tr>
                <td><?php echo $enreg["id_personnel"];?></td>
                <td><?php echo $enreg["nom"];?></td>
                <td><?php echo $enreg["prenom"];?></td>
                <td><?php echo $enreg["date_naissance"];?></td>
                <td><?php echo $enreg["sexe"];?></td>
                <td><?php echo $enreg["login"];?></td>
                <td><?php echo $enreg["mdp"];?></td>
                <td><?php echo $enreg["fonction"];?>></input></td>
                <td><?php echo $enreg["salaire"];?>></input></td>
        </tr> 
                    <td><?php echo "<a href= 'suppemp.php?id_personnel=".$enreg['id_personnel']."''>Supprimer</a>";?></td>
                </form>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>
