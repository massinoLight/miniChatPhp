   <?php

   include 'fonction.php';
session_start();
    $user=$_SESSION['utilisateur'];
    $talker=$_SESSION['correspandant'];
    $labdd=connectBdd();
    $idu1=getUserId($user);
    $idu2=getUserId($talker);




if( $_POST[message] !="")
{

//$sql="INSERT INTO `message`(`utilisateur1`, `utilisateur2`, `contenu`, `dateenvoi`) VALUES (1,21,'$_POST[message]', NOW() )";
$donnees= $labdd->prepare('INSERT INTO `message`(`utilisateur1`, `utilisateur2`, `contenu`, `dateenvoi`) VALUES (?,?,?, NOW() )');
    $donnees->bindParam(1, $idu1, PDO::PARAM_INT);
    $donnees->bindParam(2, $idu2, PDO::PARAM_INT);
    $donnees->bindParam(3, $_POST[message], PDO::PARAM_STR, 255);
    $donnees->execute();



}
else
{
echo "<p style='color:red'>probléme lors de l'envoi </p>";
}

header('Location: discussion.php?correspandant='.$talker);


?>
