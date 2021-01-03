@extends('layouts.main')

@section('content')
<div class="page-ricetta">
    <div class="container">

        <h3>{{ $ricetta['name'] }}</h3>
        <div class="image">
            <img src="{{ $ricetta['img'] }}" alt="">
        </div>
        <div class="info">
            <div class="dosi">
                DOSI:
                <span>
                    {{ $ricetta['people'] }} 
                    PERSONE
                </span>
            </div>
            <div class="tempo">
                TEMPI DI PREPARAZIONE:
                <span>
                    {{ $ricetta['time'] }} 
                    min
                </span>
            </div>
            <div class="diff">
                DIFFICOLTA':
                <span>
                    @if ($ricetta['difficult'] == 0)
                    FACILE
                    @elseif ($ricetta['difficult'] == 1)
                    MEDIA
                    @elseif ($ricetta['difficult'] == 2)
                    DIFFICILE
                    @endif
                </span>
            </div>
        </div>
        <div class="description">
            <h3>DESCRIZIONE:</h3>
            {{ $ricetta['description'] }}
        </div>
        @if ($id > 0)
        <div class="arrow-left">
            <a href="{{ route('ricetta', $id - 1 ) }}">
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>
        @endif
        @if ($id < $length)
            <div class="arrow-right">
                <a href="{{ route('ricetta', $id + 1 ) }}">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        @endif
    
    
    
        <a href="{{ route('ricette') }}">Visualizza tutte le ricette</a>
    </div>
</div>
@endsection
