@extends('layouts.main')

@section('content')
	
	@foreach($errors->all() as $error)
		<p class="error">{{ $error }}</p>
	@endforeach
	
	<h1>Créer une nouvelle tâche</h1>

	{{ Form::open() }}
		<input type="text" name="name" placeholder="Votre tâche" />
		<input type="submit" value="Créer">
	{{ Form::close() }}
@stop