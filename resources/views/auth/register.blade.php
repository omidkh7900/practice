@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('record new product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                            <label for="title" class="col-md-1">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ old('name') }}" required autofocus>

                                @error('name')
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
                                <input id="file" type="file" class="form-control @error('email') is-invalid @enderror" name="picture" value="{{ old('picture') }}" required >

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
