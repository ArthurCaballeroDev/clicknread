<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="/admin/fonts/fontawesome-all.css">
    <link rel="stylesheet" href="/admin/fonts/font-awesome.css">
    <link rel="stylesheet" href="/admin/fonts/material-icons.css">
    <link rel="stylesheet" href="/admin/fonts/fontawesome5-overrides.css">
</head>
<body class="bg-gradient-primary" style="color: rgb(133, 135, 150);background: rgb(33,37,41);">
<?php
require('config.php');
if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['email'],  $_REQUEST['datedenaissance'],  $_REQUEST['adressepostale'], $_REQUEST['password'])){
  // récupérer le nom  
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom); 
	 // récupérer le prenom
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom);
  // récupérer l'email 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
	 // récupérer la date de naissance
  $datedenaissance = stripslashes($_REQUEST['datedenaissance']);
  $datedenaissance = mysqli_real_escape_string($conn, $datedenaissance);
	 // récupérer l'adresse postale
  $adressepostale = stripslashes($_REQUEST['adressepostale']);
  $adressepostale = mysqli_real_escape_string($conn, $adressepostale);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  
  $query = "INSERT into `users` (nom, prenom, email, datedenaissance, adressepostale, type, password)
        VALUES ('$nom', '$prenom', '$email', '$datedenaissance', '$adressepostale', 'user', '".hash('sha256', $password)."')";
  $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background: url(&quot;/admin/img/welcome.png&quot;) center;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Crée votre compte dès maintenant !</h4>
                            </div>
							
					<form class="form-control" action="" method="post">
								
  						<div class="mb-3">
							<input type="text" class="form-control form-control-user" name="nom" placeholder="Nom" required />
						</div>
						
						<div class="mb-3">
							<input type="text" class="form-control form-control-user" name="prenom" placeholder="Prenom" required />
						</div>
                                   									
						<div class="mb-3">
							<input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse e-mail" name="email">
						</div>						
						
						<div class="mb-3">
							<input type="date" class="form-control form-control-user" name="datedenaissance" placeholder="Date de Naissance" required />
						</div>
						
						<div class="mb-3">
							<input type="text" class="form-control form-control-user" name="adressepostale" placeholder="Adresse Postale" required />
						</div>
								
									<div class="mb-3"> 
                                <div class="mb-3"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Mot de passe" name="password">
                                    </div>
                                    </div>
					
			<button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: rgb(33,37,41);">Créer mon compte</button>

									</form>
								
							<?php } ?>
								

                            <div class="text-center">
                                <hr><a class="small" href="/admin/forgot-password.php">Mot de passe oublié ?</a>
                            </div>
                            <div class="text-center"><a class="small" href="login.php">Vous avez déjà un compte ? Connectez vous ici !</a></div>
								
						</div>
							
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/admin/js/script.js"></script>
    <script src="/admin/js/theme.js"></script>
</body>
</html>