@extends('layouts.main')

@section('content')

<div class="container">

    @include('partials.gallery',['list' => $limited])

</div>


@endsection