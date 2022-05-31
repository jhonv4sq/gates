@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($userId == 1)
                        <p>has entrado como Administrador</p>
                    @endif
                    @if ($userId == 2)
                        <p>has entrado como editor</p>
                    @endif
                    @if ($userId == 3)
                        <p>has entrado como posteador</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
