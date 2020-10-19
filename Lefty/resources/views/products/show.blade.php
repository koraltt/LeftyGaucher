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
      <button type="button" class="btn btn-success"> Ajouter au panier <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg></button>
    

</div>

<aside class="col-md-4">
  <div class><img class="productDetailsImage" src="/images/{{$product->imgUrl}}" class ="secondPhoto">
 
  <img class="productDetailsImage" src="/images/{{$product->imgUrl2}}" class ="secondPhoto" >
</div>
</aside>

</div>

</div>

@endsection