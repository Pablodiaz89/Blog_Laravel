<!-- borro el inicio, y le digo que extienda de ese arhivo que acabamos de crear-->
@extends('template')

@section('content')
    <h1>Listado</h1>

    
    @foreach ($posts as $post)
        <p>
            <strong> {{ $post->id }} </strong>
            <a href="{{ route('post', $post->slug) }}"> 
                {{ $post->title }}
            </a>
        </p>
        <br>
        <span>{{ $post->user->name  }}</span>
    @endforeach

    {{ $posts->links() }}

@endsection 
    


