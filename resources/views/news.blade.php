@extends('layouts.main')

@section('content')

<div class="news">
    <div class="top">
        <h3>news e approfondimenti da parte della molisana</h3>
    </div>

    @include('partials.blog', ['list' => $news])

</div>


@endsection