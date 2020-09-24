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
                <tr>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                <tr>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                <tr>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
