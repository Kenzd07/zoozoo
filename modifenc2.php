<html>
    <div>
    </div>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        @include("connexion.php");
        $code = $_GET['id_enclos'];
        $requete="select * from enclos where id_enclos='$code'";
        $resultat=mysqli_query($conn,$requete);;
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
                <form method='POST' action="updateenc.php">
                <td><input name="id_enclos" value='<?php echo $enreg["id_enclos"];?>'readonly></input></td>
                <td><input name="nom_enclo" value='<?php echo $enreg["nom_enclo"];?>'></input></td>
                <td><input name="capacite_max" value='<?php echo $enreg["capacite_max"];?>'></input></td>
                <td><input name="taille_enclo" value='<?php echo $enreg["taille_enclo"];?>'></input></td>
                <td><input type="radio" name="yes" value="1"><b>YES</b>
                    <input type="radio" name="yes" value="0"><b>NO</b>
                </td>
                <td><input name="responsable" value='<?php echo $enreg["responsable"];?>'></input></td>
                <input type="submit" VALUE="modifier">
                </form>
        </tr> 
        </tr> <?php } ?> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>