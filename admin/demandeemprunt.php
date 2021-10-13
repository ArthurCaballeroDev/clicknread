<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["nom"])){
    header("Location: login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Demande d'emprunt</title>
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="/admin/fonts/fontawesome-all.css">
    <link rel="stylesheet" href="/admin/fonts/font-awesome.css">
    <link rel="stylesheet" href="/admin/fonts/material-icons.css">
    <link rel="stylesheet" href="/admin/fonts/fontawesome5-overrides.css">
</head>

<body class="bg-gradient-primary" style="color: rgb(133, 135, 150);background: rgb(33,37,41);">
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
                                <h4 class="text-dark mb-4">Demande d'emprunt</h4>
                            </div>
                            <form class="user">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Titre du livre" name="title"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="ID Livre" name="idLivre"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="description" id="exampleInputEmail" aria-describedby="description" placeholder="Description courte" name="email"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="dateDeParution" id="examplePasswordInput" placeholder="Date de parution" name="datedeparution"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="genre" id="exampleRepeatPasswordInput" placeholder="Genre" name="genre"></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: rgb(33,37,41);">Demander le livre</button>
                                <hr>
								<a href="dashboardinscrit.php"onclick="history.go(-1)">Retour</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/admin/js/script.js"></script>
    <script src="/admin/js/theme.js"></script>
</body>

</html>
