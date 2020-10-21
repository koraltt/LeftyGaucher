@extends('layouts.app')

@section('content')


<div class="card-deck">
    @foreach($items as $item)


  <div class="card">
    <a href="/items/{{$item->id}}"><img src="/images/{{$product->imgUrl}}" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">{{$item->titleFr}}</h5>
     
    <div class="card-footer">
      <small class="text-muted">${{$item->regularPrice}}</small>
      <a href="/products/modify/{{$product->id}}"><button type="button"  class="btn btn-outline-danger btn-sm float-right">Modifier</button></a>
    </div>
  </div>
</div>

@endforeach













</div>
@endsection