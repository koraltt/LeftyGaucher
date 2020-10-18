@extends('layouts.app')

@section('content')

<div class="container">
<h2 class="specialH">{{$product->titleFr}}</h2>
  <div class="row">
    <div class="col-md-8">

          <h4 >ID de Produit:  {{$product->id}}</h4>
      
     <h5>Brand:<span class="font-weight-bold"> {{$product->brand}}</span></h5>
      <p>{{$product->descriptionFr}}</p>
          
      
      
      <p> Catégorie: <strong>{{$product->categoryFr}}</strong></p>
      <p class="font-weight-light">Prix regulier: <strong>${{$product->regularPrice}}</strong></p>
      <p>Prix courant: <strong>${{$product->discountPrice}}</strong></p>
      <a href="{{route('cart.add', $product->id) }}"> <button type="button" class="btn btn-success"> Ajouter au panier <i class="fas fa-shopping-cart"></i></button></a>


 
</div>

<aside class="col-md-4">
  <div class><img class="productDetailsImage" src="/images/{{$product->imgUrl}}" class ="secondPhoto">
 
  <img class="productDetailsImage" src="/images/{{$product->imgUrl2}}" class ="secondPhoto" >
</div>
</aside>

</div>

</div>

@endsection