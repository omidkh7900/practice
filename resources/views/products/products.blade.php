@extends('layouts.app')

@section('content')
    <a class="d-block text-center" href="{{route('products.index')}}">hie</a>
  <div class="row">
    @foreach ($products as $product)
    <div class="col-3">
      <img class="text-center" src="/storage/{{ $product->picture }}" alt="products" width="100%" height="85%">
      <h4 class="text-center"><a href="/products/{{$product->id}}">{{$product->title}}</a></h4>
    </div>
    @endforeach
  </div>
@endsection
