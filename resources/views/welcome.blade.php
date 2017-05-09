@extends('layouts.app')

@section('parallax')
<div class="parallax">
    <div class="slider_container">
        <div class="center-flex">
            <h1 class="logo">Phillip Glidewell</h1>
            <h3 class="tagline">Web Application Developer</h3>

            <a href="#front-page-content">
                <span>
                    <i class="fa fa-arrow-circle-down tagline"></i>
                </span>
            </a>

        </div>

    </div>
</div>
@endsection


@section('content')
@include('layouts.blog_header')
<div class="col-sm-8 blog-main">

    @foreach($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h2>
        <p class="blog-post-meta">
            {{ $post->user->name }} posted on
            {{ $post->created_at->toFormattedDateString() }}
        </p>

        {{ $post->body }}
    </div><!-- /.blog-post -->
    @endforeach

    <!-- <nav>
        <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
        </ul>
    </nav> -->

</div>



@endsection
