<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <br>
                <!-- Tableau de Bord Personnalisé -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDashboard" aria-expanded="false" aria-controls="collapseDashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Tableau de Bord Personnalisé
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDashboard" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="overview.html">Vue d'ensemble des progrès</a>
                        <a class="nav-link" href="notifications.html">Notifications</a>
                    </nav>
                </div>
                
                <!-- Gestion des Cours -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCourses" aria-expanded="false" aria-controls="collapseCourses">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Gestion des Cours
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCourses" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{('videos.viduo')}}">Vidéos de Cours</a>
                        <a class="nav-link" href="enrolled-courses.html">Liste des cours inscrits</a>
                        <a class="nav-link" href="recommended-courses.html">Cours recommandés</a>
                        <a class="nav-link" href="course-evaluations.html">Évaluation du cours</a>
                    </nav>
                </div>

                <!-- Accès aux Ressources -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseResources" aria-expanded="false" aria-controls="collapseResources">
                    <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                    Accès aux Ressources
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseResources" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="course-material.html">Matériel de cours</a>
                        <a class="nav-link" href="discussion-forum.html">Forum de discussion</a>
                    </nav>
                </div>

                <!-- Évaluations et Quiz -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAssessments" aria-expanded="false" aria-controls="collapseAssessments">
                    <div class="sb-nav-link-icon"><i class="fas fa-pencil-alt"></i></div>
                    Évaluations et Quiz
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAssessments" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="access-evaluations.html">Accès aux évaluations</a>
                        <a class="nav-link" href="evaluation-results.html">Résultats des évaluations</a>
                    </nav>
                </div>

                <!-- Suivi des Progrès -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProgress" aria-expanded="false" aria-controls="collapseProgress">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                    Suivi des Progrès
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProgress" aria-labelledby="headingFive" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="progress-charts.html">Graphiques et rapports</a>
                        <a class="nav-link" href="learning-goals.html">Objectifs d'apprentissage</a>
                    </nav>
                </div>

                <!-- Profil Personnel -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProfile" aria-expanded="false" aria-controls="collapseProfile">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Profil Personnel
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProfile" aria-labelledby="headingSix" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="personal-info.html">Informations personnelles</a>
                        <a class="nav-link" href="learning-preferences.html">Préférences d'apprentissage</a>
                    </nav>
                </div>

                <!-- Communications -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCommunications" aria-expanded="false" aria-controls="collapseCommunications">
                    <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                    Communications
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCommunications" aria-labelledby="headingSeven" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="internal-messaging.html">Messagerie interne</a>
                        <a class="nav-link" href="email-notifications.html">Notifications par email</a>
                    </nav>
                </div>

                <!-- Certificats et Diplômes -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCertificates" aria-expanded="false" aria-controls="collapseCertificates">
                    <div class="sb-nav-link-icon"><i class="fas fa-certificate"></i></div>
                    Certificats et Diplômes
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCertificates" aria-labelledby="headingEight" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="certificates.html">Certificats de réussite</a>
                        <a class="nav-link" href="certificate-history.html">Historique des certificats</a>
                    </nav>
                </div>

                <!-- Support et Aide -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSupport" aria-expanded="false" aria-controls="collapseSupport">
                    <div class="sb-nav-link-icon"><i class="fas fa-life-ring"></i></div>
                    Support et Aide
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSupport" aria-labelledby="headingNine" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="faq.html">FAQ et ressources d'aide</a>
                        <a class="nav-link" href="technical-support.html">Assistance technique</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
