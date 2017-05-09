@extends ('layouts.app')
@section('content')

<div class="col-sm-8">


    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <hr/>
    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>{{ $comment->user->name }} commented {{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>

                {{ $comment->body }}

             </li>
             @endforeach
        </ul>
    </div>

    <hr/>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" placeholder="Your thoughts here" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name="button" class="btn btn-primary">Add thoughts</button>
                </div>
            </form>
        </div>
        @include ('layouts.errors')
    </div>
</div>

@endsection
