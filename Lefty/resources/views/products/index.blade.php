@extends('layouts.app')

@section('content')


<div class="card-deck">
    @foreach($products as $product)


  <div class="card">
    <a href="/products/{{$product->id}}"><img src="/images/{{$product->imgUrl}}" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">{{$product->titleFr}}</h5>
     
    <div class="card-footer">
      <small class="text-muted">${{$product->regularPrice}}</small>
    </div>
  </div>
</div>

@endforeach













</div>
@endsection