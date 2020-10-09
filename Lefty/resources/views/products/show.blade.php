@extends('layouts.app')

@section('content')


Produit - {{$product->frenchShort}}

<img src="images\{{$product->imageName}}">

<form action="{{ route('products.destroy', $product->id) }}" method="POST">

@csrf
@method ('DELETE')
<button>Supprimer</button>
<a href="/products" class = "back"> <- Retourner au produits>


@endsection