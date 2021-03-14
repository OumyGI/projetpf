<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<style type="text/css">
		input,label{
			display: inline-block;
			width: 100px;
			margin-top: 20px;
		}
		h4{
			color: red;
			
		}
		h1{
			color: blue;
			font-weight: bold;
		}
	</style>
</head>
<body>
<form method="POST" action="formulaire.php">
<label for="nom">Nom</label>
<input type="text" name="nom" required="champ obligatoire"><br>
<label for="Prénom">Prénom</label>
<input type="text" name="Prénom" required="champ obligatoire"><br>
<label for="password">Mot de passe</label>
<input type="password" name="password" required="champ obligatoire"><br>
<input type="submit" name="Envoyer" value="connecter">
</form>
</body>
</html>
<?php 
$n="elmoujoudi";
$p="oumaima";
$password=123456;
$pre=strtolower(trim($_POST["Prénom"]));
$nom=strtolower(trim($_POST["nom"]));
$mdp=strtolower(trim($_POST["password"]));
if(isset($_POST["Envoyer"]))
{
    if ($nom==$n &&$pre==$p && $mdp==$password) 
	{header("location:accueil.php");}
    else {
	echo "<h4>";
	    if ($nom!=$n) {
		echo "Le nom est incorrect ! <br>";
	}
	    if ($pre!=$p) {
		echo "Le Prénom est incorrect ! <br>";
	}
	    if ($mdp!=$password ) {
		echo " Le mot de passe est incorrect ! <br>";
	}
	echo("</h4>");}
}
?>
