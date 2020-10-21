@extends('layouts.app')

@section('content')


<h1> Entrer l'adress</h1>

<form action="/address" method="POST">
@csrf
<label for="country" >Pay</label>
<input type="text" id ="country" name ="country">
<br><label for="province" >Province</label>
<input type="text" id ="province" name ="province">
<br><label for="city" >Ville</label>
<input type="text" id ="city" name ="city">
<br><label for="postal_code" >Code postal</label>
<input type="text" id ="postal_code" name ="postal_code">
<br><label for="street" >Rue</label>
<input type="text" id ="street" name ="street">
<br><label for="house_num" >House number</label>
<input type="number" id ="house_num" name ="house_num">
<br><label for="apt_num">Appartement</label>
<input id="apt_num" type="number" name="apt_num">
<input type="submit" value="Enregistrer l'adress'">
</form>

@endsection