@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('conversations')}}" class="btn btn-link">Back</a>
        </div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <h1>{{ $conversation->title }}</h1>

            <p class="text-muted">Posted by {{ $conversation->user->name }}</p>
            <hr>

            <div>
                {!! $conversation->body !!}
            </div>
        </div>
    </div>

    <hr>

    @include('conversations.replies')
</div>
@endsection