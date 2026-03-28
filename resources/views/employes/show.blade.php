@extends('layouts.base-layout')
@section('content')
    <h1>Profil Employé</h1>

    <nav>
        <a href="{{ route('employes.index') }}">Retour aux employés</a>
    </nav>

    @if (session('error'))
        <p style="color: red;">
            {{ session('error') }}
        </p>
    @endif

    @include('partials.detail-employe', ['employe' => $employe])

    <h3>Activité</h3>
    <p>Statut : {{ $employe->getStatut() }}</p>

    <form method="GET" action="{{ route('employes.show', $employe->id) }}">
        <label for="modele">Voiture :</label>
    </form>

    @if ($employe->voitures->isEmpty())
        <p>Aucune voiture liée à cet employé.</p>
    @else
        <ul>
            @foreach ($employe->voitures as $voiture)
                <li>
                    Voiture {{ $loop->iteration }} - {{ $voiture->modele }}
                    (<a href="{{ route('voitures.show', $voiture->id) }}">Voir</a>)
                </li>
            @endforeach
        </ul>
    @endif
@endsection