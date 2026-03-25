<h2>Informations principales de M. {{ strtoupper($employe->nom) }}</h2>
<table>
    <tr><td>Nom</td><td>{{ $employe->nom }}</td></tr>
    <tr><td>Prénom</td><td>{{ $employe->prenom }}</td></tr>
    <tr><td>Email</td><td>{{ $employe->email }}</td></tr>
    <tr><td>NbVoiture</td><td>{{ $employe->getNbVoitures() }}</td></tr>
</table>