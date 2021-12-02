@extends('layouts.app')
@section('title','Edit Post')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Post</h3>
    </div>

<form action="{{ route('posts.update',['post' => $post->id]) }}" method="POST">
    @method('put')

    @csrf
    <div class="card-body">

        <div class="form-group">
            <label>Category</label>
            <input class="form-control" type="text" name="category" value="{{ $post->category }}" laceholder="Enter category">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name"  value="{{ $post->name }}" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" type="number" name="price"  value="{{ $post->price }}" placeholder="Enter price">
        </div>
    </div>

    <div class="card-footer">
        <button class="btn btn-success">update</button>
    </div>
</form>
</div>
@endsection
