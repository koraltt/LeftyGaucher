@extends('layouts.app')

@section('content')

<h1>Profile</h1>

<p>Username: {{Auth::user()->name }}</p>
<input type="button" value="Modifier" onclick="update()">
<p>Email: {{Auth::user()->email }}</p>
<input type="button" value="Modifier" onclick="update()">
<div> Adress:
<p>{{Auth::user()->address->country}}, {{Auth::user()->address->province}}</p>
<p>{{Auth::user()->address->city}}</p>
<p>{{Auth::user()->address->postal_code}} {{Auth::user()->address->apt_num}} - {{Auth::user()->address->house_num}} {{Auth::user()->address->street}}</p>
</div>
<a href="{{route('addresses.create')}}">Ajouter ou modifier votre address</a>
@endsection

