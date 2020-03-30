@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Conversations</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($conversations as $conversation)
                    <h2><a href="{{ route('conversations.show', $conversation) }}">{{ $conversation->title }}</a></h2>
                    
                    @continue($loop->last)

                    <hr>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
