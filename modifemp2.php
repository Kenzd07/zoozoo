<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $code = $_GET['id_personnel'];
        $requete="select * from personnels where id_personnel='$code'";
        $resultat=mysqli_query ($conn,$requete);
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
                <form method="post" action="updateemp.php" >
                <td><input name="id_personnel" value='<?php echo $enreg["id_personnel"];?>' readonly></input></td>
                <td><input name="nom" value='<?php echo $enreg["nom"];?>'readonly></input></td>
                <td><input name="prenom" value='<?php echo $enreg["prenom"];?>'></input></td>
                <td><input name="date_naissance" value='<?php echo $enreg["date_naissance"];?>'></input></td>
                <td><input name="sexe" value='<?php echo $enreg["sexe"];?>'></input></td>
                <td><input name="login" value='<?php echo $enreg["login"];?>'></input></td>
                <td><input name="mdp" value='<?php echo $enreg["mdp"];?>' hidden></input></td>
                <td><input name="fonction" value='<?php echo $enreg["fonction"];?>'></input></td>
                <td><input name="salaire" value='<?php echo $enreg["salaire"];?>'></input></td>
                <input type="submit" VALUE="modifier">
            </form>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>