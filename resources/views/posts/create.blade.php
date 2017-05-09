@extends('layouts.app')
@section('content')
<div class="col-sm-8">


    <h1>Create a post</h1>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <textarea id="body" name="body" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primar">Publish</button>
        </div>

        @include('layouts.errors')

    </form>
</div>

@endsection
