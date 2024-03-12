<html>
    <?php
    @include('connexion.php');
    $code=$_GET['id_animal'];
    $sq1 = "DELETE from animaux where id_animal = '$code'";
    mysqli_query($conn,$sq1);

    header('location:affsupp.php');

    exit;

    mysql_close($conn);

    ?>
</html>    