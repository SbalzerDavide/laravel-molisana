@extends('layouts.main')

@section('content')

<div class="who container">
    
    @include('partials.gallery',['list' => $who])

</div>


@endsection