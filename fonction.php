<?php
/***fonction qui permet
la connéxion a la bdd****/
function connectBdd()
{
  try
   {
$bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'root', '');
     }
  catch(Exception $e)
  {
   die('Erreur : '.$e->getMessage());
       }
   return $bdd; // indique la valeur à renvoyer, ici le volume
}

/*****fonction qui permet de connaitre le nombre de messaages
entre deux utilisateurs passé en paramétre
*******/
function getNbMessage($utilisateur1, $utilisateur2)
{
$labdd=connectBdd();
$donnees= $labdd->prepare('SELECT COUNT(*) as nbMessage FROM `message`WHERE utilisateur1=? and utilisateur2=? or utilisateur1=? and utilisateur2=?   ORDER BY dateenvoi
');
$donnees->bindParam(1, $utilisateur1, PDO::PARAM_INT);
$donnees->bindParam(2, $utilisateur2, PDO::PARAM_INT);
$donnees->bindParam(3, $utilisateur2, PDO::PARAM_INT);
$donnees->bindParam(4, $utilisateur1, PDO::PARAM_INT);
$donnees->execute();
//$donnees = $reponse->fetch();
//$reponse->closeCursor();
$reponse=$donnees->fetch();
return $reponse['nbMessage'];
}

/***
fonction qui permet de retourner l'id d'un utilisateur
pour pouvoir chercher les messages envoyé par celui ci
****/
function getUserId($utilisateur1)
{
$labdd=connectBdd();
$donnees= $labdd->prepare('SELECT `id` as ID FROM `utilisateur` WHERE nom=?');
$donnees->bindParam(1, $utilisateur1, PDO::PARAM_STR);
$donnees->execute();
$reponse=$donnees->fetch();
$result= $reponse['ID'];
return $result;

}
/***fonction pour l'overture et la fermeture
des sessions utilisateurs
****/
function sessionUtilisateur(){
  session_start();
  if(isset($_GET['deconnexion']))
  {
     if($_GET['deconnexion']==true)
     {
        session_unset();
        header("location:login.php");
     }
  }
  else if($_SESSION['username'] !== ""){
      $user = $_SESSION['username'];
      // afficher un message
      echo "<h1>Bonjour $user</h1>";
      return $user;
  }

}

?>
