@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>I nostri post</h1>

        <table class="post-table table">
            <thead>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Data</th>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author}}</td>
                        <td>{{ $post->post_date }}</td>
                        <td><a href="{{ route('admin.posts.show', $post)}}" class="btn btn-success">Vai al post</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan=3>Non c'è alcun post da visualizzare</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection