<div class="gallery">
    @if (!empty($list))
        @foreach ($list as $element)
            <div class="box">
                <img src="{{ $element['img'] }}" alt="{{ $element['name']}}">
                <a href="#"></a>
            </div>
        @endforeach
    @elseif(empty($list))
        <div class="container">
            <h1>la sezione è vuota</h1>
        </div>
    @endif

</div>
