@extends('layouts.app')

@section('content')
    <a href="{{route('products.index')}}">hie</a>
  <div class="row">
    @foreach ($products as $product)
    <div class="col-3">
      <img src="/storage/{{ $product->picture }}" alt="products">
      <h4><a href="/products/{{$product->id}}">{{$product->title}}</a></h4>
    </div>
    @endforeach
  </div>
@endsection
