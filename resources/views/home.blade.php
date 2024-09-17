@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <!-- Hero Section -->
            <div class="col-lg-12 text-center mb-5">
                <h1 class="display-4 text-primary">Bem-vindo ao Mundo de Taylor Swift!</h1>
                <p class="lead text-secondary">Explore anotações inspiradas nas músicas e na vida de Taylor Swift.</p>
            </div>

            <!-- Card to Navigate to Annotations -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">🎤 Explore as Anotações</h3>
                    </div>
                    <div class="card-body">
                        <p>Compartilhe suas experiências e pensamentos inspirados pela música de Taylor Swift.</p>
                        <a href="{{ route('annotations') }}" class="btn btn-primary btn-block">Ir para o Formulário</a>
                    </div>
                </div>
            </div>

            <!-- Inspirational Content -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card bg-light">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Inspire-se com Taylor Swift</h3>
                    </div>
                    <div class="card-body">
                        <p>Taylor Swift é conhecida por suas letras emocionantes e histórias envolventes. Explore suas músicas e deixe suas anotações inspiradas por suas letras!</p>
                        <p>Aqui estão alguns álbuns icônicos para você explorar:</p>
                        <ul>
                            <li><strong>"1989"</strong> - O álbum que marcou a transição para o pop.</li>
                            <li><strong>"Folklore"</strong> - Uma imersão em histórias e folclore contemporâneo.</li>
                            <li><strong>"Reputation"</strong> - Uma nova era de empoderamento e narrativa.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection

@section('styles')
    <style>
        .bg-primary {
            background-color: #C8102E !important; /* Tom de vermelho inspirado em Taylor Swift */
        }
        .text-primary {
            color: #C8102E !important; /* Tom de vermelho inspirado em Taylor Swift */
        }
        .text-secondary {
            color: #6C757D !important; /* Cor secundária para textos */
        }
        .btn-primary {
            background-color: #C8102E; /* Tom de vermelho para o botão */
            border-color: #C8102E;
        }
        .btn-primary:hover {
            background-color: #A00D22; /* Cor de hover mais escura */
            border-color: #A00D22;
        }
        .shadow-sm {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
