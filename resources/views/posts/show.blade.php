@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card  mb-2">

                    <div class="card-header text-center">
                        <h3>{{ $post->name }}</h3>
                    </div>
                    <div class="card-body">
                        <p>Creado por: {{ $post->user->name }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-evenly">
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"> Editar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection