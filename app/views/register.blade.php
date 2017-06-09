@extends('layouts.main')

@section('page-title')
    S'inscrire
@stop

@section('content')
	@foreach($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach


	{{ Form::open() }}
		<input type="text" name="username" placeholder="Votre Pseudo" /><br>
		<input type="password" name="password" placeholder="Votre mot de passe" /><br>
		<input type="email" name="email" placeholder="Votre adresse email"><br>
		<input type="submit" value="S'inscrire" />
	{{ Form::close() }}
@stop