@extends('layouts.main')

@section('content')

<div class="news">
    <div class="top">
        <h3>news e approfondimenti da parte della molisana</h3>
    </div>

    @include('partials.blog', ['list' => $news])
    {{-- <div class="blog">
        @foreach ($news as $article)
            <div class="box" style="background-image: url({{ $article['img'] }})">
                <div class="layover"></div>
                <div class="text">
                    <div class="date">
                        {{ $article['date'] }}
                    </div>
                    <div class="title">
                        {{ $article['title'] }}
                    </div>
                    <button class="btn btn-secondary">
                        <a href="{{ $article['article-path'] }}">READ MORE</a>
                    </button>
                </div>
            </div>
        @endforeach
    </div> --}}
</div>


@endsection