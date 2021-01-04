<div class="gallery">
    @foreach ($list as $element)
    <div class="box">
        <img src="{{ $element['img'] }}" alt="{{ $element['name']}}">
        <a href="#"></a>
    </div>
    @endforeach
</div>
