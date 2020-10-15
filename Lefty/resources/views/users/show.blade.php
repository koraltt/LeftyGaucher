@extends('layouts.app')

@section('content')

<h1>Profile</h1>

<p>Username: {{Auth::user()->name }}</p>
<p>Email: {{Auth::user()->email }}</p>
@endsection

