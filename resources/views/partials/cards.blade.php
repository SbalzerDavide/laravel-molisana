@if (! empty($cards))
    <h2>{{ $title }}</h2>

    <div class="cards">
        @foreach ($cards as $card)
            <div class="card">
                <h4>{{ $card['titolo'] }}</h4>
                <img src="{{ $card['src'] }}" alt="">
                <a href="{{ route('product', $card['id']) }}">Dettagli prodotto</a>
            </div>
        @endforeach
    </div>
@endif
