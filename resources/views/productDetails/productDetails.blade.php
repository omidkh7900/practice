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
                        <td>
                            <form action="/products/{{$product->id}}/edit" method="get">
                                @csrf
                                <input type="hidden" value="edit">
                                <a href="javascript:;" onclick="if(confirm('hi')){$(this).closest('form').submit()}">Edit</a>
                            </form>
                        </td>
                        <td>
                            <form action="/products/{{$product->id}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" value="delete">
                                <a href="javascript:;" onclick="if(confirm('hi')){$(this).closest('form').submit()}">Delete</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
