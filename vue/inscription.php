<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page de connexion GSB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body>

<?php include("navbar.php"); ?>

<?php include("footer.php"); ?>
                    <div class="form-box">
                        <div class="form">
                            <form class="login-form">
                                <h1 class="main-heading">Formulaire de connexion</h1>
				                <input type="text"placeholder="nom d'utilisateur"/>
				                <input type="password"placeholder="mot de passe"/>
				                <input type="submit" class="submit" value="Connexion"></input>
				                <p class="message"> Non inscrit ? <a href="#">S'enregistrer</a></p>
				            </form>

                            <form class="register-form" method="post" action="../controleur/aiguillageInscription.php">
                               <h1 class="main-heading">Formulaire d'inscription   </h1>
				                <input type="text" name="nom" placeholder="nom"/>
				                <input type="text" name="prenom" placeholder="prenom"/>
                                <input type="text" name="adresse" placeholder="adresse"/>
				                <input type="text" name="telephone" placeholder="telephone"/>				               
                                <input type="text" name="pseudo" placeholder="pseudo"/>
                                <input type="password" name="mdp" placeholder="mot de passe"/>
				                <input type="submit" class="submit" value="Inscription"></input>
				                <p class="message">Deja enregistré ?<a href="#"> Connexion </a>
				                </p>
				            </form>
                        
			             </div>
	                </div>
                

    <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
    </script>
    <script>
        $('.message a').click(function(){$('form').animate({height: "toggle",opacity: "toggle"},"slow");});
    </script>
</body>
</html>
</body>
</html>