@extends('layouts.app')

@section('content')

<h1>Profile</h1>

<p>Username: {{Auth::user()->name }}</p>
<input type="button" value="Modifier" onclick="update()">
<p>Email: {{Auth::user()->email }}</p>
<input type="button" value="Modifier" onclick="update()">
<p>{{Auth::user()->country}}</p>
<a href="{{route('addresses.create')}}">Ajouter address</a>
@endsection

