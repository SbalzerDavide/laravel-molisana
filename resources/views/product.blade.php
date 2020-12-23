@extends('layouts.main')

@section('content')
    <section class="product">
        <h1>{{ $product['titolo'] }}</h1>    
        <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
        <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
    </section>
@endsection
