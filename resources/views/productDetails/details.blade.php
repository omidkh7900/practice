@extends('layouts.app')

@section('content')
        <div class="container border rounded p-4">
            <div class="row col-md-12 ">
                <div class="col-md-6">
                    <img class="w-100 rounded" alt="Bootstrap Image Preview"
                         src="/storage/{{ $product->picture }}"/>
            </div>
            <div class=" col-md-6">
                    <h2>
                        {{$product->title}}
                    </h2>
                    <h5 class="text-info">
                        {{ $product->category }}
                    </h5>
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>
        </div>
@endsection
