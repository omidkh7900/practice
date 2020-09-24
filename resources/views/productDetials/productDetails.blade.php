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
                            <form action="{{route('products.edit')}}" method="get">
                                <a href="javascript:;">Edit</a></form>
                        </td>
                        <td>
                            <form action="{{route('products.destroy')}}" method="post">
                                @method('delete')
                                <a href="">Delete</a></form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
