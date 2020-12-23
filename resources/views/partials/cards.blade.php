@if (! empty($cards))
        <div class="container">
            <h2>{{ $title }}</h2>
        
            <div class="cards">
                @foreach ($cards as $card)
                    <div class="card">
                        <a href="{{ route('product', $card['id']) }}">                            
                            <img src="{{ $card['src'] }}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
@endif
