@extends('layouts.app')

@section('content')
  <div class="row">
    @foreach ($products as $product)
    <div class="col-3">
      <img src="/storage/{{ $product->picture }}" alt="products">
      <h4><a href="{{route('products.show')}}">{{$product->title}}</a></h4>
    </div>
    @endforeach
  </div>
@endsection
