@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-element">
        <h1 class="card-title"> {{ $post->title}} </h1>
        <address class="card-subtitle"> {{ $post->author }} </address>
        <address class="card-subtitle date"> {{ $post->date }} </address>
        <p class="card-body"> {{$post->post_content}} </p>
        <div class="back-to-list">
            <a href="{{ route('admin.posts.index')}}" class="btn btn-toolbar">Torna alla lista</a>
        </div>
    </div>
</div>
@endsection