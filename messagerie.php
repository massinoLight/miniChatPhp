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
                                              try
                                                   {
	                                         $bdd = new PDO('mysql:host=localhost;dbname=visiteurs;charset=utf8', 'root', '');
                                                     }
                                                  catch(Exception $e)
                                                  {
                                                   die('Erreur : '.$e->getMessage());
                                                       }
                                                $compteur=0;
                                               // Récupération des 10 derniers messages
                                           $reponse = $bdd->query('SELECT `contenu` FROM `message` WHERE utilisateur1=21 LIMIT 1');
                                           $compteur=$compteur+1;

                                           // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                                     while ($donnees = $reponse->fetch())
                                       {
	                             echo '
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
								<h4 class="m-0"><a href="#">Jacks David</a></h4>
							    <time class="text-white ml-3">1 hours ago</time>
							    <like></like>
							    <p class="mb-0 text-white">Thank you for visiting all the way from New York.</p>
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
									<h4 class="m-0"><a href="#">Steve Alex</a></h4>
								    <time class="text-white ml-3">1 week ago</time>
								    <like></like>
								    <p class="mb-0 text-white">Thank you for visiting all the way from NYC.</p>
								</div>
							</div>
						</li>
					</ul>
				</ul>
				<ul class="p-0">
					<li>
						<div class="row comments mb-2">
							<div class="col-md-2 col-sm-2 col-3 text-center user-img">
						   <img id="profile-photo" src="http://nicesnippets.com/demo/man03.png" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
								<h4 class="m-0"><a href="#">Andrew Filander</a></h4>
							    <time class="text-white ml-3">7 day ago</time>
							    <like></like>
							    <p class="mb-0 text-white">Thank you for visiting all the way from New York.</p>
							</div>
						</div>
					</li>
					<ul class="p-0">
						<li>
							<div class="row comments mb-2">
					<div class="col-md-2 offset-md-2 col-sm-2 offset-sm-2 col-3 offset-1 text-center user-img">
					<img id="profile-photo" src="http://nicesnippets.com/demo/man04.png" class="rounded-circle" />
								</div>
								<div class="col-md-7 col-sm-7 col-8 comment rounded mb-2">
									<h4 class="m-0"><a href="#">james Cordon</a></h4>
								    <time class="text-white ml-3">1 min ago</time>
								    <like></like>
								    <p class="mb-0 text-white">Thank you for visiting from an unknown location.</p>
								</div>
							</div>
						</li>
					</ul>
				</ul>
				<ul class="p-0">
					<li>
						<div class="row comments mb-2">
							<div class="col-md-2 col-sm-2 col-3 text-center user-img">
						   <img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
							</div>
							<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
								<h4 class="m-0"><a href="#">Tye Simmon</a></h4>
							    <time class="text-white ml-3">1 month ago</time>
							    <like></like>
							    <p class="mb-0 text-white">Thank you for visiting all the way from New York.</p>
							</div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</div>
  ';
                                            }

                                        $reponse->closeCursor();
                                                 







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
