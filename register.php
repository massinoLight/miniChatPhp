<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="insert.php" method="POST">
                <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="login" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="mot de passe" name="password" required>
             

                <label><b>Confirmer mot de passe</b></label>
                <input type="password" placeholder="mot de passe" name="passwordC" required>

                <input type="submit" id='register' value='REGISTER' >
               
                
            </form>
        </div>
    </body>
</html>
