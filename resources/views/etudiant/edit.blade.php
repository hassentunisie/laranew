<form action="{{ route("etudiant.update",$etudiant->id) }}" method="POST">
    @csrf
    @method("PUT")
nom: <input type="text" name="nom" value="{{ $etudiant->nom }}"><br>
prenom: <input type="text" name="prenom" value="{{ $etudiant->prenom }}"><br>
<input type="submit" value="Ajouter">
</form>