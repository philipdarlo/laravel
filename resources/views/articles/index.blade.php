@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>A list of our articles</h2>
                </div>
                <ul class="style1">
                    @foreach ($articles as $article)
                        <li class="first">
                            <h1>
                                <a href="/articles/{{$article->id}}">{{ $article->title}}</a>
                            </h2>
                            <p><img src="images/banner.jpg" alt="help" class="image image-full" /> </p>
                            <p>{{ $article->excerpt}}</p>
                            <p>Date {{ $article->created_at}}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection