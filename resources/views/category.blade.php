{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

<h2 class="mb-5"> Post Category :{{$category}}</h2>

@foreach ($posts as $post)
<article class="mb-5">
<h2>
    <a href="/post/{{ $post->slug }}"> {{ $post->title }}</a>
</h2>
{!!$post->excerpt!!}
</article>
    
@endforeach
    
@endsection



