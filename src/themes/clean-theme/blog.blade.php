@extends('theme::layouts.blog')

@section('title', cms('site.name'))

@section('body_classes')

@section('header')
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')"><div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{ cms('site.name') }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ cms('site.description') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                        <div class="post-preview">
                            <a href="{{ URL::to('blog/' . $post->slug) }}">
                                <h2 class="post-title">
                                    {{ $post->title }}
                                </h2>
                                @if ($post->subtitle)
                                    <h3 class="post-subtitle">
                                        {{ $post->subtitle }}
                                    </h3>
                                @endif
                            </a>
                            <p>{{ $post->teaser }}</p>
                            <p class="post-meta">Posted by <a href="{{ URL::to('#') }}">{{ $post->author->name }}</a> on {{ $post->publishDate() }}</p>
                        </div>
                        <hr>
                    @endforeach
                    
                    {{ $posts->links() }}
                @else
                    <div class="post-preview">
                        <h2 class="post-title">
                            Welcome!
                        </h2>
                        Setup your first <a href="{{ url('admin/blog/create') }}">post</a>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
@stop
