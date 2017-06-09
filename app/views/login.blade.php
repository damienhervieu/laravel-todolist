@extends('layouts.main')

@section('page-title')
    Connexion
@stop

@section('content')	
	@foreach($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach

					  
	{{ Form::open() }}
		<input type="text" name="username" placeholder="Pseudo" /><br>
		<input type="password" name="password" placeholder="Mot de passe" /><br>
		<input type="submit" value="Se connecter" />
	{{ Form::close() }}

	
@stop