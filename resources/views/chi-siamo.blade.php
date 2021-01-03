@extends('layouts.main')

@section('content')

<div class="who container">
    @foreach ($who as $element)
        <div class="box">
            <img src="{{ $element['img'] }}" alt="">
            <a href="#"></a>
        </div>
    @endforeach

</div>


@endsection