@extends('layouts.base-layout')
@section('content')
    <h1>Ajouter une voiture à {{ $employe->prenom }} {{ $employe->nom }}</h1>

    <nav>
        <a href="{{ route('employes.index') }}">Retour aux employés</a>
    </nav>

    <form method="POST" action="{{ route('voitures.store') }}">
        @csrf

        <label for="modele">Modèle :</label>
        <input type="text" id="modele" name="modele" required>

        <label for="nb_places">Nombre de places :</label>
        <input type="number" id="nb_places" name="nb_places" required min="1">

        <input type="hidden" name="id_employe" value="{{ $employe->id }}">

        <button type="submit">Ajouter la voiture</button>
    </form>
@endsection