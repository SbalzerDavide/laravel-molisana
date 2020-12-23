{{-- layout --}}
@extends('layouts.main')

@section('content')
    <h2>LE LUNGHE</h2>
    <div class="cards">
        @foreach ($lunghe as $card)
            <div class="card">
                <h4>{{ $card['titolo'] }}</h4>
                <img src="{{ $card['src'] }}" alt="">
                <a href="{{ route('product', $card['id']) }}">Dettagli prodotto</a>
            </div>
        @endforeach
    </div>

    <h2>LE CORTE</h2>
    <div class="cards">
        @foreach ($corte as $card)
            <div class="card">
                <h4>{{ $card['titolo'] }}</h4>
                <img src="{{ $card['src'] }}" alt="">
                <a href="{{ route('product', $card['id']) }}">Dettagli prodotto</a>
            </div>
        @endforeach
    </div>

    <h2>LE CORTISSIME</h2>
    <div class="cards">
        @foreach ($cortissime as $card)
            <div class="card">
                <h4>{{ $card['titolo'] }}</h4>
                <img src="{{ $card['src'] }}" alt="">
                <a href="{{ route('product', $card['id']) }}">Dettagli prodotto</a>
            </div>
        @endforeach
    </div>

    
@endsection

