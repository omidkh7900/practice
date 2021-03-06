@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('record new product') }}</div>

                    <div class="card-body">
                        @if('/products/create'==$_SERVER['REQUEST_URI'])
                        <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @elseif("/products/$product->id/edit" == $_SERVER['REQUEST_URI'])
                                <form method="post" action="/products/{{$product->id}}" enctype="multipart/form-data">
                                    @method('PUT')
                            @endif
                            @csrf


                            <label for="title" class="col-md-1">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $product->title ?? '' }}" required autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>
                            <br>
                            <br>

                            <label for="category" class="col-md-4">{{ __('category') }}</label>

                            <div class="col-md-6">
                              <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $product->category ?? '' }}" required autofocus>

                              @error('category')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                            <br>
                            <br>
                            <br>

                            <label for="description" class="col-md-4">{{ __('desciprtion') }}</label>

                            <div class="col-md-6">
                              <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description ?? '' }}" required autofocus></textarea>

                              @error('description')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>

                            <br>
                            <br>
                            <br>

                            <label for="image" class="col-md-3">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file"  name="picture" required >

                                @error('picture')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
