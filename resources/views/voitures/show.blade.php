@extends('layouts.base-layout')
@section('content')
    <h1><strong>Voiture</strong></h1>

    <h2>Modèle :</h2>
    <strong>{{ $voiture->modele }}</strong>

    <h2>Nb places :</h2>
    <strong>{{ $voiture->nb_places }}</strong>

    <h2>Propriétaire :</h2>
    @if ($voiture->employe)
        @include('partials.detail-employe', ['employe' => $voiture->employe])
    @else
        <p>Aucun propriétaire</p>
    @endif
@endsection
