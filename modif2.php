<head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $code = $_GET['id_animal'];
        $requete="select * from animaux where id_animal='$code'";
        $resultat=mysqli_query ($conn,$requete);
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
                <form method="post" action="update.php" >
                <td><input name='id_animal' value='<?php echo $enreg["id_animal"];?>' readonly></input></td>
                <td><input name='id_espece' value='<?php echo $enreg["id_espece"];?>'readonly></input></td>
                <td><input name='pseudo' value='<?php echo $enreg["pseudo"];?>'></input></td>
                <td><input name='date_naissance' value='<?php echo $enreg["date_naissance"];?>'></input></td>
                <td><input name='sexe' value='<?php echo $enreg["sexe"];?>'></input></td>
                <td><input name='commentaire' value='<?php echo $enreg["commentaire"];?>'></input></td>
                <input type="submit" VALUE="modifier">
            </form>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>