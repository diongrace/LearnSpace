<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <br>
                <!-- Tableau de Bord -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDashboard" aria-expanded="false" aria-controls="collapseDashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Tableau de Bord
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDashboard" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="overview.html">Vue d'ensemble</a>
                        <a class="nav-link" href="notifications.html">Notifications</a>
                    </nav>
                </div>

                <!-- Apprentissage de la Manipulation Ordinateur -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseComputerBasics" aria-expanded="false" aria-controls="collapseComputerBasics">
                    <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                    Manipulation d'Ordinateur
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseComputerBasics" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('computer-tutorials') }}">Tutoriels pour Débutants</a>
                        <a class="nav-link" href="{{ route('file-management') }}">Gestion de Fichiers</a>
                        <a class="nav-link" href="{{ route('create') }}">Ajouter tutotiels</a>
                    </nav>
                </div>

                <!-- Cours de Programmation -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProgramming" aria-expanded="false" aria-controls="collapseProgramming">
                    <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                    Cours de Programmation
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProgramming" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="languages.html">Langages de Programmation</a>
                        <a class="nav-link" href="coding-exercises.html">Exercices Pratiques</a>
                        <a class="nav-link" href="projects.html">Projets et Défis</a>
                    </nav>
                </div>

                <!-- Montage Vidéo -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVideoEditing" aria-expanded="false" aria-controls="collapseVideoEditing">
                    <div class="sb-nav-link-icon"><i class="fas fa-video"></i></div>
                    Montage Vidéo
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVideoEditing" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="editing-tutorials.html">Tutoriels de Montage</a>
                        <a class="nav-link" href="project-files.html">Fichiers de Projet</a>
                    </nav>
                </div>

                <!-- Graphisme et Photoshop -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePhotoshop" aria-expanded="false" aria-controls="collapsePhotoshop">
                    <div class="sb-nav-link-icon"><i class="fas fa-paint-brush"></i></div>
                    Graphisme et Photoshop
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePhotoshop" aria-labelledby="headingFive" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="photoshop-tutorials.html">Tutoriels Photoshop</a>
                        <a class="nav-link" href="graphic-design.html">Design Graphique</a>
                    </nav>
                </div>

                <!-- Ressources et Documentation -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseResources" aria-expanded="false" aria-controls="collapseResources">
                    <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                    Ressources et Documentation
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseResources" aria-labelledby="headingSix" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="guides.html">Guides et Manuels</a>
                        <a class="nav-link" href="discussion-forum.html">Forum de Discussion</a>
                    </nav>
                </div>

                <!-- Évaluations et Certificats -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAssessments" aria-expanded="false" aria-controls="collapseAssessments">
                    <div class="sb-nav-link-icon"><i class="fas fa-certificate"></i></div>
                    Évaluations et Certificats
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAssessments" aria-labelledby="headingSeven" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="exams.html">Examens et Quiz</a>
                        <a class="nav-link" href="certificates.html">Certificats de Réussite</a>
                    </nav>
                </div>

                <!-- Support et Assistance -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSupport" aria-expanded="false" aria-controls="collapseSupport">
                    <div class="sb-nav-link-icon"><i class="fas fa-life-ring"></i></div>
                    Support et Assistance
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSupport" aria-labelledby="headingEight" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="faq.html">FAQ et Support</a>
                        <a class="nav-link" href="technical-support.html">Assistance Technique</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="sb-sidenav-footer">
            <div class="small">Connecté en tant que:</div>
            Nom de l'Utilisateur
        </div>
    </nav>
</div>
