<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["nom"])){
    header("Location: login.php");
    exit();
  }
?>
<?php
  $host = 'l';
  $dbname = '';
  $username = '';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM livres";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tableau de bord inscrit</title>
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="/admin/fonts/fontawesome-all.css">
    <link rel="stylesheet" href="/admin/fonts/font-awesome.css">
    <link rel="stylesheet" href="/admin/fonts/material-icons.css">
    <link rel="stylesheet" href="/admin/fonts/fontawesome5-overrides.css">
</head>

<body id="page-top">
    <div id="wrapper">
		
   <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="color: rgb(33,37,41);background: rgb(33,37,41);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="material-icons">dashboard</i></div>
                    <div class="sidebar-brand-text mx-3"><span>Click n'Read</span></div>
                </a>
                <hr class="sidebar-divider my-0">
				
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="admin/home.php" style="font-family: Lato, sans-serif;"><i class="fas fa-table"> </i><span style="font-family: Lato, sans-serif;">Tableau de bord <?php echo $_SESSION['nom']; ?></span></a></li>
					
                    <li class="nav-item"><a class="nav-link" href="demandeemprunt.php"><i class="fa fa-plus"></i><span style="font-family: Lato, sans-serif;">Demande d'emprunt</span></a></li>
					
                    <!-- <li class="nav-item"><a class="nav-link" href="catalogue.php"><i class="fa fa-book"></i><span style="font-family: Lato, sans-serif;">Voir le catalogue</span></a></li> -->
					
					<li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fa fa-book"></i><span style="font-family: Lato, sans-serif;">Déconnexion</span></a></li>
                </ul>
				
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
           
	   </div>
        </nav>
		
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="font-family: Lato, sans-serif;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Rechercher..."><button class="btn btn-danger py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Rechercher...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">Centre de notifications</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">12/10/2021</span>
                                                <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">12/10/2021</span>
                                                <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">12/10/2021</span>
                                                <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Voir toutes les alertes</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">Vos messages</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </span></div>
                                                <p class="small text-gray-500 mb-0">Lorem ipsum </p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </span></div>
                                                <p class="small text-gray-500 mb-0">Lorem ipsum </p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </span></div>
                                                <p class="small text-gray-500 mb-0">Lorem ipsum </p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </span></div>
                                                <p class="small text-gray-500 mb-0">Lorem ipsum</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Voir tous les messages</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small" style="font-family: Lato, sans-serif;"><?php echo $_SESSION['nom']; ?> <!-- </span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"> --> </a>
                                   
									<div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
										
										<a class="dropdown-item" href="demandeemprunt.php">
											<i class="fas fa-user fa-sm fa-fw me-2 text-gray-400">
											</i>&nbsp;Demande d'emprunt</a>
										
										<!-- <a class="dropdown-item" href="catalogue.php">
											<i class="fas fa-list fa-sm fa-fw me-2 text-gray-400">
											</i>&nbsp;Voir le catalogue</a> -->
										
                                        <div class="dropdown-divider">
										</div>
										
										<a class="dropdown-item" href="../login.php">
											<i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400">
											</i>&nbsp;Déconnexion</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Mon tableau de bord</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-danger m-0 fw-bold">Catalogue</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Voir&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Rechercher"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>Titre</strong></th>
                                            <th><strong>Auteur</strong></th>
                                            <th><strong>Genre</strong></th>
											<th><strong>Date de parution</strong></th>
											<th><strong>Description</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                                        <tr>
                                           <td><?php echo htmlspecialchars($row['id']); ?></td>
       									   <td><?php echo htmlspecialchars($row['titre']); ?></td>
										   <td><?php echo htmlspecialchars($row['auteur']); ?></td>
       									   <td><?php echo htmlspecialchars($row['genre']); ?></td>
										   <td><?php echo htmlspecialchars($row['datedeparution']); ?></td>
       									   <td><?php echo htmlspecialchars($row['description']); ?></td>
                                        </tr>
										<?php endwhile; ?>
									</tbody>
                                    <tfoot>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>Titre</strong></th>
                                            <th><strong>Auteur</strong></th>
                                            <th><strong>Genre</strong></th>
											<th><strong>Date de parution</strong></th>
											<th><strong>Description</strong></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Voir 1 à 10 sur 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item link-danger"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item link-danger"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="font-family: Lato, sans-serif;">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Click n' Read 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="/admin/js/script.js"></script>
    <script src="/admin/js/theme.js"></script>
</body>

</html>