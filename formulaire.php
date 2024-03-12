<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"  />
<title>Untitled Document</title>
</head>

<body>
  	    <?php
            $conn=mysqli_connect("localhost","root","","zoo");
                
				$a=$_POST['nom'];
				$b=$_POST['prenom'];
				$c=$_POST['date_naissance'];
				$d=$_POST['sexe'];
				$e=$_POST['login'];
				$f=$_POST['mdp'];
				$g=$_POST['fonction'];
				$h=$_POST['salaire'];


            $req1="INSERT into personnels values ('','$a','$b','$c','$d','$e','$f','$g','$h')";
            $r1=mysqli_query($conn,$req1);
            mysqli_close($conn);
            
			
			?>
<script type="text/javascript">
<!--
window.alert("opération réalisé avec sucess");
window.location = "index.html"
//-->
</script>
</body>
</html>