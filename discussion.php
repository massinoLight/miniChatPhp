<!doctype html>
<html lang="en">
  <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <a href='discussion.php?deconnexion=true'><span>Déconnexion</span></a>





<?php
include 'fonction.php';


$_SESSION['utilisateur']=sessionUtilisateur();
$_SESSION['correspandant']=$_GET['correspandant'];

$idu1=getUserId($_SESSION['utilisateur']);
$idu2=getUserId($_SESSION['correspandant']);
$nb=0;



echo '<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">';

$labdd=connectBdd();
$donnees= $labdd->prepare('SELECT * FROM `message`WHERE utilisateur1=? and utilisateur2=? or utilisateur1=? and utilisateur2=?   ORDER BY dateenvoi');
    $donnees->bindParam(1, $idu1, PDO::PARAM_INT);
    $donnees->bindParam(2, $idu2, PDO::PARAM_INT);
    $donnees->bindParam(3, $idu2, PDO::PARAM_INT);
    $donnees->bindParam(4, $idu1, PDO::PARAM_INT);
    $donnees->execute();
    while ($reponse = $donnees->fetch())
      {
if($reponse['utilisateur1']==$idu1){
  echo'
        <ul class="p-0">
          <li>
            <div class="row comments mb-2">
              <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                  <img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
              </div>
              <div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
                <h4 class="m-0"><a href="#">';
                echo $_SESSION['utilisateur'];
                echo'</a></h4>
                  <time class="text-white ml-3">1 hours ago</time>
                  <like></like>';
                  echo '<p class="mb-0 text-white"><strong>' . htmlspecialchars($reponse['contenu']) . '</strong>  ' . '</p>';
            echo'	</div>
            </div>
          </li>';

}
else {
  echo'
        <ul class="p-0">
          <li>
            <div class="row comments mb-2">
              <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                  <img id="profile-photo" src="http://nicesnippets.com/demo/man02.png" class="rounded-circle" />
              </div>
              <div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
                <h4 class="m-0"><a href="#">';
                echo $_SESSION['correspandant'];
                echo'</a></h4>
                  <time class="text-white ml-3">1 hours ago</time>
                  <like></like>';
                  echo '<p class="mb-0 text-white"><strong>' . htmlspecialchars($reponse['contenu']) . '</strong>  ' . '</p>';
            echo'	</div>
            </div>
          </li>';
}

           }
?>
<form action="newMessage.php" method="POST">
<div class="row comment-box-main p-3 rounded-bottom">
<div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
<input type="text" class="form-control" placeholder="votre message ...." name="message" required />
</div>
<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
<input type="submit" id='envoi' value='Envoyer' >
</div>
</div>
</form>
</div>
</div>
</div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>
</html>
