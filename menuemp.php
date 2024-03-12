<!DOCTYPE html>
<html lang=fr>
<head>
	<!-- le titre de la page -->
	<title>ZOO grp MRG</title>
	<link rel="shortcut icon" href="logo.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="zoo1.css">
</head>
<body>
    <div class="div1">
        Gestion du zoo mrg		
    </div>
	<div class="div2">
	<?php
    @include("s.php");
    ?>
	</div>	
	<nav align="center">
		<label for="menu-mobile" class="menu-mobile"></label>
		<input type="checkbox" id="menu-mobile" role="button">
		<ul>
			<li class="menu-directeur"><a href="menuemp.php">acceuil</a></li>
			</li>	
            <li class="menu-directeur"><a href="#">gestion animaux </a>
                <ul class="submenu">  
			        <li><a target="f" href="ajout.html">Ajout animal</a></li>	
			        <li><a target="f" href="ajout_esp.html">ajout espece</a></li>
			        <li><a target="f" href="rech.php">Recherche</a></li>
			        <li><a target="f" href="modif.php">Modifier</a></li>
			        <li><a target="f" href="affsupp.php">information</a></li>
				</ul>
			</li>
			<li class="menu-directeur"><a href="#">gestion enclos </a>
                <ul class="submenu">  
			        <li><a target="f" href="ajoutenc.html">Ajout enclos</a></li>	
				</ul>
			</li>
			<li class="menu-directeur"><a href="logout.php">déconnection</a></li>
									
		</ul>
	</nav>
	<iframe src="" frameborder="0" height="1000px" width="75%" name="f"></iframe>

</body>
</html>