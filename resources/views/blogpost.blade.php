@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<style>
    .post{
        background-color: #b5c0ce;
        margin-bottom: 40px;
        border: 0.5px solid #9191a2;
        border-radius: 5px;
        
    }
    .h1{
        margin-left: 0px;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    </style>
    <div class="container">
        <a href="/home" class="btn btn-outline-primary btn-sm">Go back</a>
        <a href="/blog/create" class="btn btn-primary btn-sm">Create New Blog</a><br><br>
        <div class="row">

            @foreach($posts as $post)
            <div class="col-12 pt-2 post">
                <form action="{{ route('blog.destroy', $post->id)}}" method="post">
                    @csrf
                    <img src="https://www.teahub.io/photos/full/102-1027170_freelance-background.jpg" style="height:500px; border:1px solid black; border-radius: 5px;" class="card-img-top" alt="...">
                    <br>
                    <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                    <p>{{Str::limit($post->body,110)}}</p> 
                    <hr>
                    <a href="/blog/{{ $post->id }}/edit" class="btn btn-dark">Edit Post</a>
                </form>
                <br>
                <form action="{{ route('blog.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete Post</button>
                </form>
                <br>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
    {!! $posts->links() !!}
    </div>

 @endsection