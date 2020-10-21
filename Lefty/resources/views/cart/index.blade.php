
@extends('layouts.app')

@section('content')
<main class=" py-4 container">

<h2>Votre panier</h2>

<table class="table">
    <thead>
        <tr>
        <th>Titre</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($cartItems as $item)
    <tr>
        <td scope="row">{{$item->name}}</td>
        <td>
        {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
        </td>
        <td><form action="{{route('cart.update', $item->id)}}">
        <input type = "number" name = "quantity" value ="{{ $item->quantity }}">
        <input type = "submit" value ="sauvegarder">
        </form>
    </td>
        <td> <a href="{{route('cart.destroy', $item->id)}}"> Supprimer</a></td>
        
    </tr>
    @endforeach
    </tbody>

</table>
<h3>Sous-Total: <strong>CAD {{Cart::session(auth()->id())->getSubTotal()}} </strong></h3>
<h3>Total: <strong>CAD {{Cart::session(auth()->id())->getTotal()}} </strong></h3>
<a class="btn btn-secondary" href="{{route('cart.checkout')}}" role="button">Passer la commande</a>

<div class="text-secondary"><a href="{{route('products')}}"><p>Retourner aux achats</p></a></div>

</main>


@endsection