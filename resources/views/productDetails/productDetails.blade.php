@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <button style="background: #f8fafc" type="button" class="btn btn-outline-primary btn-block"><a href="{{route('products.create')}}">Create new product</a></button>
        </div>
        <div class="col-md-12">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">+views</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>
                            <form action="/products/{{$product->id}}/edit" method="get">
                                @csrf
                                <input type="hidden" value="edit">
                                <a href="/products/{{$product->id}}/edit">Edit</a>
                            </form>
                        </td>
                        <td>
                            <form action="/products/{{$product->id}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" value="delete">
                                <a href="javascript:;" onclick="if(confirm('Are you sure to delete??')){$(this).closest('form').submit()}">Delete</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
