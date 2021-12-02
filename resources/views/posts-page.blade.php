@extends('layouts.app')
@section('title','Pawnshop')
@section('content')

<div class="card text-center">
    <div class="card-header">
        <h3>Welcome to Technology Pawnshop</h3>
    </div>
{{-- </div> --}}
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
            <tbody>
                <form action="" method="POST">
                    @csrf
                    <tr>
                        <td></td>
                        <td ><input type="text"  required name="category" class="form-control"/></td>
                        <td><input type="text" required name="name" class="form-control"/></td>
                        <td><input type="number" required name="price" class="form-control"/></td>
                        <td colspan="2"><button class="btn btn-success">add post</button></td>
                    </tr>
                </form>
            </tbody>
            @foreach ($posts as $post )
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->category}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->price}}$</td>
                    <td>
                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger">delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('posts.edit',['post'=>$post->id])}}">
                            @csrf
                            <button class="btn btn-outline-info">edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {{ $posts->links("pagination::bootstrap-4") }}
      </div>
</div>
@endsection

