@extends('theme::layouts.blog')

@section('title', $post->title . ' | ' . cms('site.name'))

@section('body_classes')

@section('content')

    <header class="intro-header" style="background-image: url('/img/post-bg.jpg')"><div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">
                            {{ $post->subtitle }}
                        </h2>
                        <span class="meta">Posted by <a href="{{ URL::to('#') }}">{{ $post->author->name }}</a> on {{ $post->publish_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! Markdown::convertToHtml($post->body) !!}
                </div>
            </div>
        </div>
    </article>
@stop

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ url('theme/clean-theme/css/prism.css') }}">
@stop

@section('scripts')
    <script src="{{ url('theme/clean-theme/js/prism.js') }}"></script>
@stop
