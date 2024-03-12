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
        $a = $_POST['rech_text'];
        $requete="SELECT * from personnels where nom='$a'";
        $resultat=mysqli_query($conn,$requete);
        ?>
        <h1>voici les info concernant personnels :</h1>
            
        <?php $enreg=mysqli_fetch_array($resultat)
        
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
            <tr>
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
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>