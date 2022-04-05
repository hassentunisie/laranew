@extends('layouts.app');

@section('contenu_page')
    <p><b>{{ $pere->nom }}</b></p>
    @if (count($pere->fils)==0)
        Pas d'enfants.
    @endif
    @foreach ($pere->fils as $fils)
        <p>{{ $fils->nom }} ({{ $fils->Pere->nom }})</p>
    @endforeach
    <a href="{{ route("pere.list") }}">Retour</a>
@endsection