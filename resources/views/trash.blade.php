@extends('layouts.app')
@section('title','Pawnshop')
@section('content')

<div class="card text-center">
    <div class="card-header">
        <h3>Trash</h3>
        <button class="btn btn-outline-info"><a href="{{ route('posts.index') }}">Go to Home</a></button>
        <a href="{{ route('trash.restore_all') }}" class="btn btn-outline-warning">Restore All</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            @foreach ($posts as $post )
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->category}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->price}}$</td>
                    <td>
                        <a href="{{ route('trash.restore', $post->id) }}" class="btn btn-outline-warning">Restore</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('trash.delete', $post->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
    </table>
</div>
@endsection

