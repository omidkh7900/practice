@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <button type="button" class="btn btn-outline-primary btn-block">Create new product</button>
        </div>
        <div class="col-md-12">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">+Viewed</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
