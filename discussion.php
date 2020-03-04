<!doctype html>
<html lang="en">
  <head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
<div id="content">
            
            <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            
            <!-- tester si l'utilisateur est connecté -->
                <?php
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
                }
            ?>


                                               <?php
                                             // Connexion à la base de données
                                              //compter le nombre de messages total entre les deux utilisateurs 
                                               $compteur=0;
                                                  try
                                                   {
	                                         $bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'root', '');
                                                     }
                                                  catch(Exception $e)
                                                  {
                                                   die('Erreur : '.$e->getMessage());
                                                       }

            echo'</div>
	<div class="container">
		<div class="row mt-5">
		<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
				<ul class="p-0">
					<li>
					<div class="row comments mb-2">
					<div class="col-md-2 col-sm-2 col-3 text-center user-img">
				          <img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
								<h4 class="m-0"><a href="#">';
 echo $user ;
echo '</a></h4>
							    <time class="text-white ml-3">1 hours ago</time>
							    <like></like>';
                                               // Récupération des 10 derniers messages
                                           $reponse = $bdd->query('SELECT `contenu` FROM `message` WHERE 1');
                                           $i=0;

                                           // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                                     while ($donnees = $reponse->fetch())
                                       {
	                            $i=$i+1;
                                            }

                                        $reponse->closeCursor();
                                         //echo $i;
                                                 ?>
            
            
        



                                                 <?php
                                             // Connexion à la base de données
                                                  try
                                                   {
	                                         $bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'root', '');
                                                     }
                                                  catch(Exception $e)
                                                  {
                                                   die('Erreur : '.$e->getMessage());
                                                       }

                                               // Récupération des 10 derniers messages
                                           $reponse = $bdd->query('SELECT `contenu` FROM `message` WHERE utilisateur1=1 LIMIT 1');
                                          $compteur=$compteur+1;

                                           // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                                     while ($donnees = $reponse->fetch())
                                       {
	                             echo '<p class="mb-0 text-white"><strong>' . htmlspecialchars($donnees['contenu']) . '</strong>  ' . '</p>';
                                            }

                                        $reponse->closeCursor();

                                                 ?>
						
							</div>
						</div>
					</li>
					<ul class="p-0">
						<li>
							<div class="row comments mb-2">
						<div class="col-md-2 offset-md-2 col-sm-2 offset-sm-2 col-3 offset-1 text-center user-img">
						<img id="profile-photo" src="http://nicesnippets.com/demo/man02.png" class="rounded-circle" />
								</div>
								<div class="col-md-7 col-sm-7 col-8 comment rounded mb-2">
									<h4 class="m-0"><a href="#">Aziz</a></h4>
								    <time class="text-white ml-3">1 week ago</time>
								    <like></like>

    <?php
                                             // Connexion à la base de données
                                                  try
                                                   {
	                                         $bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'root', '');
                                                     }
                                                  catch(Exception $e)
                                                  {
                                                   die('Erreur : '.$e->getMessage());
                                                       }

                                               // Récupération des 10 derniers messages
                                           $reponse = $bdd->query('SELECT `contenu` FROM `message` WHERE utilisateur1=21 LIMIT 1');
                                           $compteur=$compteur+1;

                                           // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                                     while ($donnees = $reponse->fetch())
                                       {
	                             echo '<p class="mb-0 text-white"><strong>' . htmlspecialchars($donnees['contenu']) . '</strong>  ' . '</p>';
                                            }

                                        $reponse->closeCursor();

                                                 ?>
								</div>
							</div>
						</li>

<li>
					<div class="row comments mb-2">
					<div class="col-md-2 col-sm-2 col-3 text-center user-img">
				          <img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
								<h4 class="m-0"><a href="#"><?php echo $user?></a></h4>
							    <time class="text-white ml-3">1 hours ago</time>
							    <like></like>



                                                 <?php
                                             // Connexion à la base de données
                                                  try
                                                   {
	                                         $bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'root', '');
                                                     }
                                                  catch(Exception $e)
                                                  {
                                                   die('Erreur : '.$e->getMessage());
                                                       }

                                               // Récupération des 10 derniers messages
                                           $reponse = $bdd->query('SELECT `contenu` FROM `message` WHERE utilisateur1=1 LIMIT 1');

                                           // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                                     while ($donnees = $reponse->fetch())
                                       {
	                             echo '<p class="mb-0 text-white"><strong>' . htmlspecialchars($donnees['contenu']) . '</strong>  ' . '</p>';
                                            }

                                        $reponse->closeCursor();

                                                 ?>
						
							</div>
						</div>
					</li>




					</ul>
				</ul>
						
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
