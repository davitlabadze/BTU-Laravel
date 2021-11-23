@extends('layouts.app')
@section('title', 'Post')
@section('content')
    <div class="post">

        <div class="decor" style="text-decoration-color:{{ $bg }}">
            {{ ucwords($title) }}</div>
        <p>
            {{ $body }}
        </p>
        @include('components.button')
    </div>

@endsection
