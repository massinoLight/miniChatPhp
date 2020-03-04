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
if( $_POST[message] !="")
{
$sql="INSERT INTO `message`(`utilisateur1`, `utilisateur2`, `contenu`, `dateenvoi`) VALUES (1,21,'$_POST[message]', NOW() )";
//$sql="INSERT INTO `message`(`id1`, `id2`, `contenu`, `dateenvoi`) VALUES (1,21,'hey you',NOW())";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
}
else 
{
echo "<p style='color:red'>probléme lors de l'envoi </p>";
}
}
mysqli_close($con);
header('Location: discussion.php');


?>
