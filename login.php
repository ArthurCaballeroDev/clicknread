<!DOCTYPE html>
<html style="background: #212529;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="/admin/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/admin/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/fonts/material-icons.min.css">
    <link rel="stylesheet" href="/admin/fonts/fontawesome5-overrides.css">
</head>
<body class="bg-gradient-primary" style="background: rgb(33,37,41);">
<?php
require('config.php');
session_start();
if (isset($_POST['nom'])){
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom);
  $_SESSION['nom'] = $nom;
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE nom='$nom' 
  and password='".hash('sha256', $password)."'";
  
  $result = mysqli_query($conn,$query) or die(mysql_error());
  
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($user['type'] == 'admin') {
      header('location: admin/dashboardemploye.php');      
    }else{
      header('location: admin/dashboardinscrit.php');
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background: url(&quot;admin/img/register.png&quot;) center;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h2 class="text-dark mb-4">Ravis de vous revoir !</h2>
                                    </div>
									<form class="user" action="" method="post" name="login">
											<div class="mb-3"><input type="text" class="form-control form-control-user" name="nom" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nom"></div>
											<div class="mb-3"><input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Mot de passe">
												<div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Se souvenir de moi</label></div>
                                            </div>
											<div class="form-check"><input type="submit" value="Connexion " name="submit" class="btn btn-primary d-block btn-user w-100 box-button" style="background: rgb(33,37,41);">
												<hr>
													<?php if (! empty($message)) { ?>
    													<p class="errorMessage"><?php echo $message; ?></p>
													<?php } ?>
									</form>
												<div class="text-center"><a class="small" href="forgotpassword.php">Mot de passe oublié ?</a></div>
  												<div class="text-center"><a class="small" href="register.php">Créer mon compte</a></div>
												

                              </div>
                            </div>
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
