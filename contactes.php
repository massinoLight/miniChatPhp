<!doctype html>
<html lang="en">
  <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>





<?php
include 'fonction.php';
$user=sessionUtilisateur();
echo '<h1><center>Vos Contactes</center></h1>';
echo '<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">';

$labdd=connectBdd();
$donnees= $labdd->prepare('SELECT nom FROM `utilisateur` ORDER BY(nom)');

    $donnees->execute();
    while ($reponse = $donnees->fetch())
      {

if($reponse['nom']!=$user){

 if (rand()%2==0){
   echo'
         <ul class="p-0">
           <li>
             <div class="row comments mb-2">
               <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                   <img id="profile-photo" src="http://nicesnippets.com/demo/man02.png" class="rounded-circle" />
               </div>
               <div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
                 <h4 class="m-0"><a href="#">';

                 echo '<strong><a href=discussion.php?utilisateur=massino&correspandant='.$reponse['nom'].'></strong>';
                 echo '<b>'.$reponse['nom'].'</b>';
                 echo '</a>';

             echo'	</div>
             </div>
           </li>';

 }else {
   echo'
         <ul class="p-0">
           <li>
             <div class="row comments mb-2">
               <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                   <img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
               </div>
               <div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
                 <h4 class="m-0"><a href="#">';
                  echo '<b><a href=discussion.php?utilisateur=massino&correspandant='.$reponse['nom'].'></b>';
                 echo '<b>'.$reponse['nom'].'</b>';
                 echo '</a>';


             echo'	</div>
             </div>
           </li>';
 }


}

        }

?>

</div>
</div>
</div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>
</html>
