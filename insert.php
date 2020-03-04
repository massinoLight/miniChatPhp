 <?php


// connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'visiteurs';
    $db_host     = 'localhost';
    
     
    
$con=mysqli_connect($db_host, $db_username, $db_password,$db_name);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Erreur lors de la connexion a la base de données : " . mysqli_connect_error();
  }
else
{
if( $_POST[password] == $_POST[passwordC] ){
$sql="INSERT INTO `utilisateur`(`nom`, `mdp`, `date_inscription`) VALUES
('$_POST[username]','$_POST[password]',DATE( NOW() ))";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
else 
{

echo '<script type="text/javascript">';
echo ' alert("Bienvenue parmis nous")';  //not showing an alert box.
echo '</script>';
header('Location: login.php');        
}

}
else 
{
echo "<p style='color:red'>verifier lemot de passe introduit </p>";
}
}





mysqli_close($con);
?>
