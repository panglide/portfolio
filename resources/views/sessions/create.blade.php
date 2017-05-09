@extends('layouts.app')
@section('content')

<div class="col-sm-8">
    <h1>Log In</h1>

    <form method="POST" action="/login">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" name="submit">Log In</button>
        </div>
    </form>

    @include('layouts.errors')
</div>

@endsection
