@extends('layouts.app')

@section('content')


<div class="card-deck">

    @foreach($products as $product)


  <div class="card h-100">
    <a href="/products/{{$product->id}}"><img src="/images/{{$product->imgUrl}}" class="card-img-top" alt="..."></a>
    <div class="card-body ">
      <h5 class="card-title">{{$product->titleFr}}</h5>
     
      <div class="card-footer">
        <small class="text-muted">${{$product->regularPrice}}</small>
        <a href="{{route('cart.add', $product->id) }}"> <button type="button" class="btn btn-outline-secondary btn-sm align-middle float-right"> Ajouter au panier <i class="fas fa-shopping-cart"></i></button></a>
      </div>
    </div>
  </div>


  @endforeach


</div>
@endsection

