@extends('layouts.app')
@section('title', 'Blog')
@section('content')

@foreach ($posts as $post)

<article>
    <h1>
        <a href="{{ route('viewPosts', ['post'=> $post->slug]) }}">
            {{ $post->title }}
        </a>
    </h1>
    @include('components.partial')
</article>
@endforeach
<div class="paginate">
    {{ $posts->links() }}
</div>

@endsection
