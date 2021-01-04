@extends('layouts.main')

@section('content')

<div class="food-service container">
    @include('partials.gallery',['list' => $service])
</div>


@endsection