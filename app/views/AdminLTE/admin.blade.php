@extends('AdminLTE.layout')
@section('page-title')
	@lang('contacts.list')
@stop
@section('optional-description')
	@lang('contacts.list-description')
@stop

@section('content')
	<input type="submit" value="AJOUTER"/>
	<table class="table">
		<tr>
			<th>@lang('english.firstname')</th>
			<th>@lang('contacts.lastname')</th>
			<th>@lang('contacts.subject')</th>
			<th>MODIFIER</th>
			<th>SUPPRIMER</th>
		</tr>
		@foreach($contacts as $contact)
		<tr>
			<td>{{ $contact->firstname }}</td>
			<td>{{ $contact->lastname }}</td>
			<td>{{ $contact->subject }}</td>
			<td>MODIFIER</td>
			<td>SUPPRIMER</td>
		</tr>
		@endforeach
	</table>
	@extends('tests.contact')
@stop