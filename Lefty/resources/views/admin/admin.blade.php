@extends('layouts.app')

@section('content')


<div class="card-deck">
    @foreach($products as $product)


  <div class="card">
    <img src="/images/{{$product->imgUrl}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->titleFr}}</h5>
     
    <div class="card-footer">
      <small class="text-muted">${{$product->regularPrice}}</small>
      <a href="/products/modify/{{$product->id}}"><button type="button"  class="btn btn-outline-danger btn-sm float-right">Modifier</button></a>
    </div>
  </div>
</div>

@endforeach

@endsection











