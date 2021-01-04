<div class="blog">
    @foreach ($list as $article)
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
</div>
