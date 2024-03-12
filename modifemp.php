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
        echo mysqli_num_rows($resultat);
        ?>
        <table border=2>
            <tr>
                <td> id_personnel : </td>
                <td> nom : </td>
                <td> prenom : </td>
                <td> date naissance : </td>
                <td> sexe : </td>
                <td> login : </td>
                <td> mdp </td>
                <td> fonction </td>
                <td> salaire </td>
            </tr>
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
            ?><tr>
                <td><input value='<?php echo $enreg["id_personnel"];?>' readonly></input></td>
                <td><input value='<?php echo $enreg["nom"];?>'readonly></input></td>
                <td><input value='<?php echo $enreg["prenom"];?>'></input></td>
                <td><input value='<?php echo $enreg["date_naissance"];?>'></input></td>
                <td><input value='<?php echo $enreg["sexe"];?>'></input></td>
                <td><input value='<?php echo $enreg["login"];?>'></input></td>
                <td><input value='<?php echo $enreg["mdp"];?>' hidden></input></td>
                <td><input value='<?php echo $enreg["fonction"];?>'></input></td>
                <td><input value='<?php echo $enreg["salaire"];?>'></input></td>
        </tr> 
                    <td><?php echo "<a href= 'modifemp2.php?id_personnel=".$enreg['id_personnel']."''>Selectionner</a>";?></td>
                </form>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>
