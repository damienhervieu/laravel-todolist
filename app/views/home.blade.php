@extends('layouts.main')

@section('page-title')
    Accueil
@stop

@section('content')
        <h1>Bonjour !</h1>
        <a href="{{ URL::to('/to-do') }}">Accéder à ma liste</a>
@stop