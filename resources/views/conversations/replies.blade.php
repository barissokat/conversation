@if ($conversation->replies->count() > 0)
<h2>Replies</h2>
@endif

@foreach ($conversation->replies as $reply)
@if ($reply->isBest())
<div class="card mb-2 border-success">
   <div class="card-header d-flex justify-content-between bg-success text-white">
      <h2 class="mb-0">{{ $reply->user->name }} said...</h2>
      
      <p class="text-white font-weight-bold mb-0 align-self-center">Best Reply!</p>
   </div>

   <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
         {{ session('status') }}
      </div>
      @endif

      <div>
         {!! $reply->body !!}
      </div>
   </div>
</div>
@endif
@endforeach

<hr>

@foreach ($conversation->replies as $reply)
<div class="card mb-2">
   <div class="card-header d-flex justify-content-between">
      <h2 class="mb-0">{{ $reply->user->name }} said...</h2>
      @if ($reply->isBest())
      <p class="text-success font-weight-bold mb-0 align-self-center">Best Reply!</p>
      @else
      @can('update', $conversation)
      <form action="{{ route('best-replies.store', $reply) }}" method="POST" class=" align-self-center">
         @csrf
         <button type="submit" class="btn btn-link btn-sm">Best reply?</button>
      </form>
      @endcan
      @endif
   </div>

   <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
         {{ session('status') }}
      </div>
      @endif

      <div>
         {!! $reply->body !!}
      </div>
   </div>
</div>
@endforeach