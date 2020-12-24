@extends('layouts.main')

@section('content')
    <section class="product">
        <div class="container">
            <h1>{{ $product['titolo'] }}</h1>    
            <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
            <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
            <div class="descriprion">
                <p>{!! $product['descrizione'] !!}</p>
            </div>
        </div>
    </section>
@endsection
