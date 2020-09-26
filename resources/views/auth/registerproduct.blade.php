@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('record new product') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('products.store') }}">
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
                            
                            <div class="col-md-6">
                              <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description ?? '' }}" required autofocus>

                              @error('description')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                            <br>
                            <br>
                            <br>

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

                            <label for="image" class="col-md-3">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file"  name="picture" value="{{ $product->picture ?? '' }}" required >

                                @error('email')
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
