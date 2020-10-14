@extends('layouts.app')

@section('content')

<div class="container">


<h2 class="specialH">{{$product->titleFr}}</h2>


       


    <div class="details">
     <h4 >ID de Produit:  {{$product->id}}</h4>
      
     <h5>Brand:{{$product->brand}}</h5>
      <p>{{$product->descriptionFr}}</p>
          
      <p>Prix: <strong>${{$product->regularPrice}}</strong></p>
      
      <p> Catégorie: <strong>{{$product->categoryFr}}</strong></p>
    

</div>
<div class="photoBlock">
  <img src="/images/{{$product->imgUrl}}" class ="secondPhoto">
  <img src="/images/images2/{{$product->imgUrl2}}" class ="secondPhoto" >
</div>

</div>

</div>

@endsection