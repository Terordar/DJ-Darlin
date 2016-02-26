@extends('Frontend.app')

@section('title', 'Page introuvable')

@section('content')
    <section id="error" class="container text-center">
        <h1>Cette page n'a pas été trouvée</h1>
        <p>Désolé, la page que vous cherchez n'existe pas sur le serveur. Elle a été supprimée ou vous avez fourni une adresse incorrecte. S'il vous plait, vérifiez que l'adresse utilisée est correcte et réessayez.</p>
        <a class="btn btn-primary" href="{{ url('/') }}">REVENIR A L'ACCUEIL</a>
    </section>
@endsection