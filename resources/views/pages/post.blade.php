@extends('layouts.app')
@section('title', 'Post')
@section('content')
<article>
    <h1>
        {{ $post->title }}
    </h1>
    @include('components.partial')

</article>

<div class="back">
    <a href="{{ route('blog') }}">Go Back</a>
</div>

@endsection
