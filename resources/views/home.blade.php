<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Plateforme LMS</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Lien vers Font Awesome -->

    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f0f8ff; /* Couleur de fond légère (Bleu clair) */
            color: #303132; /* Couleur du texte sombre pour un bon contraste */
        }
    
        nav {
            background-color: #4caf50; /* Couleur verte douce pour le nav */
            transition: background-color 0.3s, box-shadow 0.3s; /* Ajout d'une ombre au survol */
        }
    
        nav a {
            color: white; /* Couleur des liens en blanc */
            margin-right: 20px; /* Espace entre les éléments du menu */
            transition: color 0.3s; /* Transition douce pour les liens */
        }
    
        nav a:last-child {
            margin-right: 0; /* Supprimer l'espace après le dernier élément */
        }
    
        nav a:hover {
            color: #ffc107; /* Couleur d'accent au survol */
        }
    
        nav .navbar-toggler {
            border: none; /* Supprimer la bordure du bouton de navigation */
        }
    
        .nav-item-spacing {
            margin-right: 20px; /* Ajuste la valeur selon tes besoins */
        }
    
        header.header-container {
        border: 2px solid #bebfc1; /* Bordure de 2px de couleur verte */
        border-radius: 10px; /* Coins arrondis */
        padding: 40px; /* Espacement intérieur pour le contenu */
        background-color: rgba(21, 20, 20, 0.728); /* Fond blanc semi-transparent */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre légère pour le cadre */
        margin: 20px; /* Marge extérieure pour espacer le cadre du reste du contenu */
    }

    /* Styles existants pour header, à conserver */
    header {
        background-image: url('{{ asset('images/banner.jpg') }}');
        background-size: cover;
        color: white; /* Couleur du texte en blanc pour un bon contraste */
        text-align: center; /* Centre le texte */
        position: relative; /* Permet le positionnement d'autres éléments à l'intérieur */
    }

    header h1 {
        font-size: 3rem; /* Taille de police agrandie */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Ombre du texte */
    }

    header p {
        font-size: 1.5rem; /* Taille de police pour le paragraphe */
        margin-bottom: 20px; /* Espacement en bas du paragraphe */
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Ombre du texte */
    }
    
        .carousel-item img {
            height: 400px; /* Ajustement de la hauteur des images */
            object-fit: cover; /* Pour garder les proportions de l'image */
        }
    
        .carousel-caption {
            background-color: rgba(22, 21, 21, 0.5); /* Fond semi-transparent */
            padding: 15px; /* Espacement autour du texte */
            border-radius: 5px; /* Coins arrondis */
        }
    
        .features {
            display: flex; /* Utilisation de flexbox pour aligner les éléments */
            flex-direction: column; /* Disposition en colonne */
            align-items: center; /* Centrer les éléments horizontalement */
            text-align: center; /* Centre le texte à l'intérieur des cartes */
        }
    
        .card {
            height: 300px; /* Hauteur fixe pour toutes les cartes */
            margin: 20px; /* Espacement entre les cartes */
            display: flex; /* Utilisation de flexbox pour le contenu interne */
            flex-direction: column; /* Disposition en colonne */
            justify-content: center; /* Centre verticalement le contenu */
            border: 1px solid #ccc; /* Bordure légère autour des cartes */
            border-radius: 8px; /* Coins arrondis pour les cartes */
            transition: transform 0.3s; /* Effet de transition pour le zoom */
            background-color: #ffffff; /* Fond des cartes en blanc */
        }
    
        .card:hover {
            transform: scale(1.05); /* Effet de zoom au survol */
        }
    
        .footer {
            background-color: #0c7be9; /* Couleur de fond de pied de page */
            color: white; /* Couleur du texte en blanc */
            padding: 20px 0; /* Espacement autour du contenu */
            text-align: center; /* Centre le texte du pied de page */
        }
    
        .feature-icon {
            width: 60px; /* Taille des icônes */
            margin-bottom: 15px; /* Espace entre l'icône et le titre */
        }
    </style>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Plateforme LMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item nav-item-spacing">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i> Accueil</a>
                </li>
                <li class="nav-item nav-item-spacing">
                    <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> À propos</a>
                </li>
                <li class="nav-item nav-item-spacing">
                    <a class="nav-link" href="#"><i class="fas fa-book-open"></i> Cours</a>
                </li>
                <li class="nav-item nav-item-spacing">
                    <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher"></i> Devenir Enseignant</a>
                </li>
                @auth
                <li class="nav-item dropdown nav-item-spacing">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/dashboard/profile') }}"><i class="fas fa-user"></i> Mon Profil</a>
                        <a class="dropdown-item" href="{{ url('/dashboard/settings') }}"><i class="fas fa-cog"></i> Paramètres</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/dashboard/logout') }}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                    </div>
                </li>
                @else
                <li class="nav-item nav-item-spacing"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Se connecter</a></li>
                <li class="nav-item nav-item-spacing"><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> S'inscrire</a></li>
                @endauth
                <li class="nav-item nav-item-spacing">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    
    
    <header class="header-container">
        <div class="container">
            <h1 class="display-4 font-weight-bold">Bienvenue sur la Plateforme LMS</h1>
            <p class="lead">Apprenez à votre rythme avec nos cours variés et interactifs.</p>
            <a href="#" class="btn btn-warning btn-lg">Découvrez nos Cours</a>
        </div>
    </header>
    
    <!-- Carrousel -->
    <div id="courseCarousel" class="carousel slide my-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/images/cour.jpeg" class="d-block w-100" alt="Cours 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cours de Programmation</h5>
                    <p>Développez vos compétences en codage avec notre cours complet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/homeschool.png" class="d-block w-100" alt="Cours 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cours de Design</h5>
                    <p>Apprenez les bases du design graphique et de l'UX/UI.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/edu.png" class="d-block w-100" alt="Cours 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cours de Marketing Digital</h5>
                    <p>Maîtrisez les stratégies de marketing en ligne.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#courseCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#courseCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>

    <div class="container features">
        <h2 class="text-center mb-4">Pourquoi Choisir Notre Plateforme ?</h2>
        <div class="row d-flex justify-content-center"> <!-- Ajout de classes pour centrer la ligne -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('images/interactive-icon.png') }}" alt="Cours Interactifs" class="feature-icon" />
                        <h5 class="card-title">Cours Interactifs</h5>
                        <p class="card-text">Participez à des cours interactifs pour maximiser votre apprentissage.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('images/access-icon.png') }}" alt="Accès 24/7" class="feature-icon" />
                        <h5 class="card-title">Accès 24/7</h5>
                        <p class="card-text">Accédez à vos cours et ressources à tout moment, n'importe où.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ asset('images/support-icon.png') }}" alt="Support Communautaire" class="feature-icon" />
                        <h5 class="card-title">Support Communautaire</h5>
                        <p class="card-text">Rejoignez notre communauté d'apprenants et d'instructeurs pour vous aider.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <p>&copy; {{ date('Y') }} Plateforme LMS. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
