@extends('layouts.app')

@section('content')
<div class="container">
<h2>Votre commande</h2>



<h3>Détails de la commande</h3>


<form action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" name="shipping_fullname" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Province</label>
        <input type="text" name="shipping_province" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="shipping_city" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Zip</label>
        <input type="text" name="shipping_zipcode" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Adresse</label>
        <input type="text" name="shipping_address" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="shipping_phone" id="" class="form-control">
    </div>

    <h4>Options de payement</h4>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="card">
            Carte de Crédit

        </label>

    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
            Paypal

        </label>

    </div>


    <a href="{{route('paypal.checkout')}}"> <button type="submit" class="btn btn-primary mt-3">Passer au paiement</button></a>


</form>



</div>

@endsection