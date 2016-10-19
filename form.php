<?php  
//obtenir les valeurs du formulaire
$nom = mysqli_real_escape_string($con, $_POST['nom']); 
$prenom = mysqli_real_escape_string($con, $_POST['prenom']);
$courriel = mysqli_real_escape_string($con, $_POST['courriel']);
								 		 //insert les valeurs dans la bd
$sql = "INSERT INTO contacts (firstname, lastname, email) VALUES ('$nom','$prenom','$courriel')";

if(!mysqli_query($con, $sql)){
	die('Erreur: ' . mysqli_error($con));
										 } else {
	header("Location: index.php");
}
?>
