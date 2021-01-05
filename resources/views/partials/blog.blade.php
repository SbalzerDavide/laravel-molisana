<div class="blog">
    @if (!empty($list))
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
    @elseif (empty($list))
        <div class="container">
            <h1>non ci sono articoli</h1>
        </div>
    @endif
</div>
