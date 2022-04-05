@extends('layouts.app');

@section('contenu_page')
    @foreach ($peres as $pere)
        <p><a href="{{ route("fils.list",$pere->id) }}">{{ $pere->nom }}</a></p>
    @endforeach
@endsection