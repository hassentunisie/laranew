<a href="{{ route("etudiant.create") }}">Ajouter un étudiant</a>
<table>
@foreach ($etudiants as $etudiant)
    <tr>
        <td>{{ $etudiant->id }}</td>
        <td>{{ $etudiant->nom }}</td>
        <td>{{ $etudiant->prenom }}</td>
        <td><a href="{{ route("etudiant.edit",$etudiant->id) }}">modifier</a></td>
        <td><form action="{{ route("etudiant.destroy",$etudiant->id) }}" method="POST">
            @csrf
            @method("DELETE")
        <input type="submit" value="Supprimer">
        </form></td>
    </tr>
@endforeach
</table>