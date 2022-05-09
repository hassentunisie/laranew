<form action="{{ route("etudiant.store") }}" method="POST">
    @csrf
nom: <input type="text" name="nom"><br>
prenom: <input type="text" name="prenom"><br>
<input type="submit" value="Ajouter">
</form>