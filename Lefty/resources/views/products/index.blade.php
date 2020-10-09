@extends('layouts.app')

@section('content')


<div class="card-deck">
    @foreach($products as $product)


  <div class="card">
    <img src="/images/{{$product->imgName}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->frenchShort}}</h5>
     
    <div class="card-footer">
      <small class="text-muted">${{$product->price}}</small>
    </div>
  </div>
</div>

@endforeach













</div>
@endsection