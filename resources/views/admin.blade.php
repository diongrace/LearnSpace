@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <div class="text-center mb-4">
            <h1 class="mt-4">Bienvenue Sur Ton Tableau de Bord</h1>
            <p class="lead">Suivez vos progrès et gérez vos activités facilement.</p>
        </div>

        <div class="row mb-4">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-light bg-info text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">Progrès des Cours</h5>
                        <p class="card-text">Suivez vos progrès dans chaque cours.</p>
                        <a href="#" class="btn btn-light">Voir les Détails</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-light bg-warning text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">Notifications</h5>
                        <p class="card-text">Restez informé avec les dernières nouvelles.</p>
                        <a href="#" class="btn btn-light">Voir les Notifications</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-light bg-success text-white">
                    <div class="card-body text-center">
                        <h5 class="card-title">Rapports</h5>
                        <p class="card-text">Générez des rapports détaillés sur vos performances.</p>
                        <a href="#" class="btn btn-light">Voir les Rapports</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-chart-area me-1"></i>
                Aperçu Graphique
            </div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="40"></canvas>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-secondary text-white">
                <i class="fas fa-table me-1"></i>
                Vos Dernières Activités
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Activité</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-10-29</td>
                            <td>Complété le cours de PHP</td>
                            <td><span class="badge bg-success">Terminé</span></td>
                        </tr>
                        <tr>
                            <td>2024-10-28</td>
                            <td>Ajouté un nouveau tutoriel</td>
                            <td><span class="badge bg-warning">En cours</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
