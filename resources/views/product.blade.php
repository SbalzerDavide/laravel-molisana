@extends('layouts.main')

@section('content')
    <section class="product">
        <div class="container">
            <h1>{{ $product['titolo'] }}</h1>    
            <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
            <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
            <div class="description">
                <p>{!! $product['descrizione'] !!}</p>
            </div>
            @if ($id > 0)
                <div class="arrow-left">
                    <a href="{{ route('product', $id - 1 ) }}">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    
                </div>
            @endif
            @if ($id < $length)
                <div class="arrow-right">
                    <a href="{{ route('product', $id + 1 ) }}">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
