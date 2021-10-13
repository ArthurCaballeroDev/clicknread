<!DOCTYPE html>
<html style="background: #212529;">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ajouter un livre</title>
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
require('../config.php');

if (isset($_REQUEST['titre'], $_REQUEST['auteur'], $_REQUEST['genre'], $_REQUEST['datedeparution'], $_REQUEST['description'])){
  // récupérer le titre
  $titre = stripslashes($_REQUEST['titre']);
  $titre = mysqli_real_escape_string($conn, $titre); 
  // récupérer l'auteur 
  $auteur = stripslashes($_REQUEST['auteur']);
  $auteur = mysqli_real_escape_string($conn, $auteur);
  // récupérer le genre 
  $genre = stripslashes($_REQUEST['genre']);
  $genre = mysqli_real_escape_string($conn, $genre);
  // récupérer la date
  $datedeparution = stripslashes($_REQUEST['datedeparution']);
  $datedeparution = mysqli_real_escape_string($conn, $datedeparution);
	 // récupérer la description
  $description = stripslashes($_REQUEST['description']);
  $description = mysqli_real_escape_string($conn, $description);
  
    $query = "INSERT into `livres` (titre, auteur, genre, datedeparution, description)
          VALUES ('$titre', '$auteur', '$genre', '$datedeparution', '$description')";
    $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>Le livre à été ajouté au catalogue avec succès.</h3>
             <p>Cliquez <a href='/admin/dashboardemploye.php'>ici</a> pour retourner à votre tableau de bord</p>
       </div>";
    }
}else{
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
                                    <h2 class="text-dark mb-4">Ajouter un livre dans le catalogue</h2>
                                    </div>
									
									<form class="user" action="" method="post" name="login">

											<div class="mb-3"><input type="text" class="form-control form-control-user" name="titre" id="titre" aria-describedby="titre" placeholder="Titre"></div>
											<div class="mb-3"><input type="text" class="form-control form-control-user" name="auteur" id="auteur" aria-describedby="auteur" placeholder="Auteur"></div>
                                            <div class="mb-3"><input type="text" class="form-control form-control-user" name="genre" id="genre" aria-describedby="genre" placeholder="Genre"></div>
                                            <div class="mb-3"><input type="date" class="form-control form-control-user" name="datedeparution" id="datedeparution" aria-describedby="datedeparution" placeholder="Date De Parution"></div>
                                            <div class="mb-3"><input type="text" class="form-control form-control-user" name="description" id="description" aria-describedby="description" placeholder="Description"></div>

											<div class="form-check"><input type="submit" value="Connexion " name="submit" class="btn btn-primary d-block btn-user w-100 box-button" style="background: rgb(33,37,41);">
                                            <hr>
											<a href="dashboardemploye.php"onclick="history.go(-1)">Retour</a>
													<?php if (! empty($message)) { ?>
    													<p class="errorMessage"><?php echo $message; ?></p>
													<?php } ?>
									</form>
							<?php } ?>
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