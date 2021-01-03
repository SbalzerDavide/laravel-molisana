@extends('layouts.main')

@section('content')

<div class="ricette">
    <div class="top line">
        <div class="container">
            <h3>ricette di primi piatti di pasta</h3>
        </div>
    </div>
    <div class="list">
        @foreach ($ricetteCount as $ricetta)
        <div class="box">
            <div class="text">
                <div class="title">
                    {{$ricetta['name']}}
                </div>
                <div class="info">
                    <div class="people">
                        <i class="fas fa-user"></i>
                        {{ $ricetta['people'] }}
                        persone
                    </div>
                    <div class="time">
                        <i class="far fa-clock"></i>
                        {{ $ricetta['time'] }}
                        minuti
                    </div>
                    <div class="difficult">
                        @for ($i = 0; $i <= $ricetta['difficult']; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        @if ($ricetta['difficult'] == 0)
                            facile
                        @elseif ($ricetta['difficult'] == 1)
                            medio
                        @elseif ($ricetta['difficult'] == 2)
                            difficle
                        @endif
                    </div>
                </div>
            </div>
            <div class="image">
                <img src="{{ $ricetta['img'] }}" alt="">
                @if ($ricetta['chef'] == true)
                    <div class="chef">
                        <img src="{{ asset('image/logo-chef-camicia.png') }}" alt="">
                    </div>
                @endif
            </div>
            <div class="overlay">
                <i class="fas fa-utensils"></i>
                <div class="text-overlay">
                    {{ $ricetta['name'] }}
                </div>
            </div>
            <a href="{{ route('ricetta', $ricetta['id']) }}" class="overlay-ancor"></a>
    
        </div>
    @endforeach

    </div>
</div>


@endsection