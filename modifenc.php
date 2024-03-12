<html>
    <div>
    </div>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $requete="select * from enclos";
        $resultat=mysqli_query($conn,$requete);
        echo mysqli_num_rows($resultat);
        ?>
        <table border=2>
                <tr>
                <td> id enclos : </td>
                <td> nom enclos : </td>
                <td> capacité max : </td>
                <td> taille enclos : </td>
                <td> eau : </td>
                <td> responsable : </td>
                </tr>
        <?php while($enreg=mysqli_fetch_array($resultat))
        {
            ?><tr>
                <td><input value='<?php echo $enreg["id_enclos"];?>'></input></td>
                <td><input value='<?php echo $enreg["nom_enclo"];?>'readonly></input></td>
                <td><input value='<?php echo $enreg["capacite_max"];?>'></input></td>
                <td><input value='<?php echo $enreg["taille_enclo"];?>'></input></td>
                <td><input type="radio" name="yes" value="1"><b>YES</b>
                    <input type="radio" name="yes" value="0"><b>NO</b>
                </td>
                <td><input value='<?php echo $enreg["responsable"];?>'></input></td>
        </tr> 
                    <td><?php echo "<a href= 'modifenc2.php?id_enclos=".$enreg['id_enclos']."''>selectionner</a>";?></td>
                </form>
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>