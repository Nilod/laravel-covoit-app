<h1><strong>Voiture</strong></h1>

<h2>Modèle :</h2>
<strong>{{ $voiture->modele }}</strong>

<h2>Nb places :</h2>
<strong>{{ $voiture->nb_places }}</strong>

<h2>Propriétaire :</h2>
@include('partials.detail-employe', ['employe' => $voiture->employe])
