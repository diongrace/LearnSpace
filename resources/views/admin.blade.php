<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LEARNSPEACE</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         @include('partials.navbar')
        </nav>
        <div id="layoutSidenav">
         @include('partials.sidebar') 
            <div id="layoutSidenav_content">
               <main>
                  <div class="container-fluid px-4">
                      <h1 class="mt-4">Bienvenue Sur Ton Tableau de Bord Etudiant</h1>
                      <ol class="breadcrumb mb-4">
                          <li class="breadcrumb-item active">Tableau de Bord</li>
                      </ol>
                      <div class="row">
                          <div class="col-xl-3 col-md-6">
                              <div class="card bg-primary text-white mb-4">
                                  <div class="card-body">Progrès des Cours</div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="#">Voir les Détails</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-md-6">
                              <div class="card bg-warning text-white mb-4">
                                  <div class="card-body">Notifications</div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="#">Voir les Détails</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-md-6">
                              <div class="card bg-success text-white mb-4">
                                  <div class="card-body">Évaluations Récentes</div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="#">Voir les Détails</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-md-6">
                              <div class="card bg-danger text-white mb-4">
                                  <div class="card-body">Alerte de Performance</div>
                                  <div class="card-footer d-flex align-items-center justify-content-between">
                                      <a class="small text-white stretched-link" href="#">Voir les Détails</a>
                                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-6">
                              <div class="card mb-4">
                                  <div class="card-header">
                                      <i class="fas fa-chart-area me-1"></i>
                                      Graphique de Progrès
                                  </div>
                                  <div class="card-body">
                                      <canvas id="progressChart" width="100%" height="40"></canvas>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card mb-4">
                                  <div class="card-header">
                                      <i class="fas fa-chart-bar me-1"></i>
                                      Graphique des Évaluations
                                  </div>
                                  <div class="card-body">
                                      <canvas id="evaluationsChart" width="100%" height="40"></canvas>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card mb-4">
                          <div class="card-header">
                              <i class="fas fa-table me-1"></i>
                              Historique des Évaluations
                          </div>
                          <div class="card-body">
                              <table id="evaluationHistory" class="table table-striped">
                                  <thead>
                                      <tr>
                                          <th>Titre de l'Évaluation</th>
                                          <th>Date</th>
                                          <th>Score</th>
                                          <th>Commentaires</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Évaluation 1</td>
                                          <td>2024-10-01</td>
                                          <td>85%</td>
                                          <td>Bon travail !</td>
                                      </tr>
                                      <tr>
                                          <td>Évaluation 2</td>
                                          <td>2024-09-15</td>
                                          <td>90%</td>
                                          <td>Excellent !</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </main>
              
                <footer class="py-4 bg-light mt-auto">
                  @include('partials.footer')
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>