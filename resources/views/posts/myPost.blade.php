@extends('layouts.app')

@section('content')

    @foreach ($posts as $post)
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{ route('posts.show', $post->id) }}" class="card text-center mb-2">
                        <div class="card-header">
                            <h3>{{ $post->name }}</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection