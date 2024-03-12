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
        $requete="select * from animaux where pseudo='$a'";
        $resultat=mysqli_query($conn,$requete);
        ?>
        <center><h1>Voici les info concernant l'animal :</h1></center>
            
        <?php $enreg=mysqli_fetch_array($resultat)
        
            ?>  
            <table style="margin: 0 auto;">
                <tr>
                <td> ID_animal : </td>
                <td> ID_esp : </td>
                <td> Pseudo : </td>
                <td> Date de Naissaance : </td>
                <td> Sexe : </td>
                <td> Commentaire : </td>
                </tr>
            <tr>
                <td><input value='<?php echo $enreg["id_animal"];?>' readonly></input></td>
                <td><input value='<?php echo $enreg["id_espece"];?>'readonly></input></td>
                <td><input value='<?php echo $enreg["pseudo"];?>'></input></td>
                <td><input value='<?php echo $enreg["date_naissance"];?>'></input></td>
                <td><input value='<?php echo $enreg["sexe"];?>'></input></td>
                <td><input value='<?php echo $enreg["commentaire"];?>'></input></td>
        </tr> 
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>